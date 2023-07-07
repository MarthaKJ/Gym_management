<x-admin-layout>
    <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="card">
            <div class="flex-center-between">
                <div class="icon-box !w-12 !h-12 bg-primary/20 text-primary"><i class="feather-users"></i></div>
                <div>
                    <span class="text-sm opacity-60 uppercase">members</span>
                    <h1 class="text-4xl font-bold mt-2">{{$membersCount}}</h1>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="flex-center-between">
                <div class="icon-box !w-12 !h-12 bg-secondaryGreen/20 text-secondaryGreen"><i
                        class="ri-file-user-line"></i></div>
                <div>
                    <span class="text-sm opacity-60 uppercase">staff</span>
                    <h1 class="text-4xl font-bold mt-2">{{$staffCount}}</h1>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="flex-center-between">
                <div class="icon-box !w-12 !h-12 bg-secondaryYellow/20 text-secondaryYellow"><i
                        class="feather-users"></i></div>
                <div>
                    <span class="text-sm opacity-60 uppercase">classes</span>
                    <h1 class="text-4xl font-bold mt-2">{{$classesCount}}</h1>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="flex-center-between">
                <div class="icon-box !w-12 !h-12 bg-secondaryRed/20 text-secondaryRed"><i
                        class="ri-price-tag-2-line"></i></div>
                <div>
                    <span class="text-sm opacity-60 uppercase">subscriptions</span>
                    <h1 class="text-4xl font-bold mt-2">{{$subscriptionsCount}}</h1>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="flex-center-between">
                <div class="icon-box !w-12 !h-12 bg-secondaryBlue/20 text-secondaryBlue"><i
                        class="feather-dollar-sign"></i></div>
                <div>
                    <span class="text-sm opacity-60 uppercase">total revenue</span>
                    <h1 class="text-4xl font-bold mt-2">Ugx {{number_format($totalRevenue, 0, ',')}}</h1>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="flex-center-between">
                <div class="icon-box !w-12 !h-12 bg-teal-500/20 text-teal-500"><i class="feather-users"></i></div>
                <div>
                    <span class="text-sm opacity-60 uppercase">users</span>
                    <h1 class="text-4xl font-bold mt-2">{{$usersCount}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-8">
        <div class="flex-center-between">
            <h1 class="text-2xl text-muted">Recent Subscriptions</h1>
            <div class="flex-align-center gap-2 text-primary">
                <a href="/admin/subscriptions" class=" underline">See more</a>
                <i class="feather-arrow-right"></i>
            </div>
        </div>
        <div class="mt-2">
            <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
                <table class="table table-striped w-full">
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
        </div>
    </div>
</x-admin-layout>