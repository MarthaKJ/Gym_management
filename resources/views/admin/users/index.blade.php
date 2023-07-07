<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Users</h1>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <div class="flex-align-center">
                            <form action="/admin/users/{{$user->id}}" method="POST">
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