<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Members</h1>
        <a href="{{ route('members.create') }}" class="btn btn-primary">New Member</a>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Membership No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Aim</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                <tr>
                    <td>{{$member->membership_number}}</td>
                    <td><img src="{{ $member->image ? asset('images/'.$member->image) : asset('images/default.png') }}"
                            alt="" class="w-9 h-9 rounded-full"></td>
                    <td>{{$member->first_name . ' ' .$member->middle_name. ' '.$member->last_name }}</td>
                    <td>{{$member->email_address}}</td>
                    <td>{{$member->gender}}</td>
                    <td>{{$member->address}}</td>
                    <td>{{$member->aim}}</td>
                    <td><span class="status {{$member->status}}">{{$member->status}}</span></td>
                    <td>
                        <div class="flex-align-center">
                            <a href="members/{{$member->id}}/edit" class="icon-box inline"><i
                                    class="feather-edit text-green-500"></i></a>
                            <form action="/admin/members/{{$member->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submint" class="icon-box inline"><i
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