<x-admin-layout>
    <div class="card">
        <form action="/admin/services/{{$service->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-4">
                <label for="name">Name</label>
                <input type="text" class="input-admin" name="name" value="{{old('name', $service->name)}}"
                    placeholder="Name">
                @error('name')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>
            <div class="flex-1 w-full sm:w-fit">
                <label for="image">Image</label>
                <input type="file" class="input-admin" name="image">
                @if ($service->image)
                <img src="{{ asset('images/'. $service->image) }}" alt="" class="w-14 h-14 rounded-md mt-2">
                @endif
                @error('image')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>
            <div class="mt-4">
                <label for="name">Description</label>
                <textarea class="input-admin h-20" name="description"
                    placeholder="Description">{{old('description', $service->description)}}</textarea>
            </div>

            <div class="flex justify-end">
                <button class="btn btn-primary mt-4">Update Service</button>
            </div>
        </form>
    </div>
</x-admin-layout>