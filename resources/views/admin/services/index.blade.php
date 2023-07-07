<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Plans</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary">New Service</a>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <td>{{$service->name}}</td>
                    <td><img src="{{ $service->image ? asset('images/'.$service->image) : asset('images/default.png') }}"
                            alt="" class="w-9 h-9 rounded-full"></td>
                    <td>
                        <div class="flex-align-center">
                            <a href="services/{{$service->id}}/edit" class="icon-box inline"><i
                                    class="feather-edit text-green-500"></i></a>
                            <form action="/admin/services/{{$service->id}}" method="POST">
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