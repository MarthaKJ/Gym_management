<x-admin-layout>
    <div class="card">
        <form action="/admin/categories/{{$category->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mt-4">
                <label for="name">Name</label>
                <input type="text" class="input-admin" name="name" value="{{old('name', $category->name)}}"
                    placeholder="Name">
                @error('name')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>
            <div class="mt-4">
                <label for="name">Description</label>
                <textarea class="input-admin h-20" name="description"
                    placeholder="Description">{{old('description', $category->description)}}</textarea>
            </div>

            <div class="flex justify-end">
                <button class="btn btn-primary mt-4">Update Category</button>
            </div>
        </form>
    </div>
</x-admin-layout>