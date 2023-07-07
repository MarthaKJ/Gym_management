<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Staff</h1>
        <a href="{{ route('staff.create') }}" class="btn btn-primary">New Staff</a>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Staff No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Position</th>
                    <th>Working Hours</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffMembers as $staffMember)
                <tr>
                    <td>{{$staffMember->staff_number}}</td>
                    <td><img src="{{ $staffMember->image ? asset('images/'.$staffMember->image) : asset('images/default.png') }}"
                            alt="" class="w-9 h-9 rounded-full"></td>
                    <td>{{$staffMember->first_name . ' ' .$staffMember->middle_name. ' '.$staffMember->last_name }}</td>
                    <td>{{$staffMember->email_address}}</td>
                    <td>{{$staffMember->gender}}</td>
                    <td>{{$staffMember->address}}</td>
                    <td>{{$staffMember->position}}</td>
                    <td>{{$staffMember->working_hours}}</span></td>
                    <td>
                        <div class="flex-align-center">
                            <a href="staff/{{$staffMember->id}}/edit" class="icon-box inline"><i
                                    class="feather-edit text-green-500"></i></a>
                            <form action="/admin/staff/{{$staffMember->id}}" method="POST">
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