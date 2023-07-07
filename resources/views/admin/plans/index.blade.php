<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Plans</h1>
        <a href="{{ route('plans.create') }}" class="btn btn-primary">New Plan</a>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Classes</th>
                    <th>Discount</th>
                    <th>Discount Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                <tr>
                    <td>{{$plan->name}}</td>
                    <td>Ugx {{number_format($plan->price, 0, ',')}}/=</td>
                    <td>{{$plan->duration}}</td>
                    <td>
                        @foreach (explode(',', $plan->services) as $item)
                        <span class="bg-slate-300 dark:bg-slate-600 rounded-full px-2 py-[2px]">{{$item}}</span>
                        @endforeach
                    </td>
                    <td>{{$plan->discount == 1 ? 'Yes' : 'No'}}</td>
                    <td>{{$plan->discount == 1 ? $plan->discount_amount : '-'}}</td>
                    <td>
                        <div class="flex-align-center">
                            <a href="plans/{{$plan->id}}/edit" class="icon-box inline"><i
                                    class="feather-edit text-green-500"></i></a>
                            <form action="/admin/plans/{{$plan->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="icon-box inline"><i
                                        class="feather-trash-2 text-red-500"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-admin-layout>