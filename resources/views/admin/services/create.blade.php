<x-admin-layout>
    <div class="card">
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <label for="name">Name</label>
                <input type="text" class="input-admin" name="name" value="{{old('name')}}" placeholder="Name">
                @error('name')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>
            <div class="mt-4">
                <label for="image">Image</label>
                <input type="file" class="input-admin" name="image">
                @error('image')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>
            <div class="mt-4">
                <label for="name">Description</label>
                <textarea class="input-admin h-20" name="description"
                    placeholder="Description">{{old('description')}}</textarea>
            </div>

            <div class="flex justify-end">
                <button class="btn btn-primary mt-4">Add Service</button>
            </div>
        </form>
    </div>
</x-admin-layout>