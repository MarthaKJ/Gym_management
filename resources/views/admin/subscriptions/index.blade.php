<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Subscriptions</h1>
        <a href="{{ route('subscriptions.create') }}" class="btn btn-primary">New Subscription</a>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Email</th>
                    <th>Plan</th>
                    <th>Amount Received</th>
                    <th>Amount Pending</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscriptions as $subscription)
                <tr>
                    <td>{{$subscription->member->first_name . ' ' .$subscription->member->middle_name. '
                        '.$subscription->member->last_name }}</td>
                    <td>{{$subscription->member->email_address}}</td>
                    <td>{{$subscription->plan->name}}</td>
                    <td>Ugx {{number_format($subscription->amount_received, 0, ',')}}/=</td>
                    <td>Ugx {{number_format($subscription->amount_pending, 0, ',')}}/=</td>
                    <td><span class="status {{$subscription->status}}">{{$subscription->status}}</span></td>
                    <td>
                        <div class="flex-align-center">
                            <a href="/admin/subscriptions/{{$subscription->id}}/edit" class="icon-box inline"><i
                                    class="feather-edit text-green-500"></i></a>
                            <form action="/admin/subscriptions/{{$subscription->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <a class="icon-box inline"><i class="feather-trash-2 text-red-500"></i></a>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-admin-layout>