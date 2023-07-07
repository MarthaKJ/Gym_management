<x-admin-layout>
    <div class="card">
        <form action="{{ route('plans.store') }}" method="post">
            @csrf

            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="name">Name</label>
                    <input type="text" class="input-admin" name="name" value="{{old('name')}}" placeholder="Name">
                    @error('name')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="price">Price</label>
                    <input type="number" class="input-admin" name="price" value="{{old('price')}}" placeholder="Price">

                    @error('price')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <label for="duration">Duration</label>
                <select class="input-admin" name="duration" value="{{old('duration')}}">
                    <option value=" ">----Choose-----</option>
                    <option value="1 Month">1 Month</option>
                    <option value="4 Month">4 Month</option>
                    <option value="6 Month">6 Month</option>
                    <option value="12 Month">12 Month</option>
                </select>
                @error('duration')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>

            <div class="mt-4">
                <label for="services">Name</label>
                <input type="text" class="input-admin" name="services" value="{{old('services')}}"
                    placeholder="Must be comma separated e.g Boxing, Cardio">
                @error('services')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>

            <div class="flex justify-end">
                <button class="btn btn-primary mt-4">Add Plan</button>
            </div>
        </form>

    </div>
</x-admin-layout>