<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Plans</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>
                        <div class="flex-align-center">
                            <a href="categories/{{$category->id}}/edit" class="icon-box inline"><i
                                    class="feather-edit text-green-500"></i></a>
                            <form action="/admin/categories/{{$category->id}}" method="POST">
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