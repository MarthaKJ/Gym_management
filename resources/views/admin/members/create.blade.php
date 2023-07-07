<x-admin-layout>
    <div class="card">

        <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="membership_number">Membership Number</label>
                    <input type="text" class="input-admin" name="membership_number" value="{{old('membership_number')}}"
                        placeholder="e.g M###">
                    @error('membership_number')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="image">Image</label>
                    <input type="file" class="input-admin" name="image" value="{{old('image')}}">
                    @error('image')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

            </div>

            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="first_name">First Name</label>
                    <input type="text" class="input-admin" name="first_name" value="{{old('first_name')}}"
                        placeholder="First Name">
                    @error('first_name')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="input-admin" name="middle_name" value="{{old('middle_name')}}"
                        placeholder="Middle Name">
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="input-admin" name="last_name" value="{{old('last_name')}}"
                        placeholder="Last Name">
                    @error('last_name')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

            </div>


            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="email_address">Email Address</label>
                    <input type="text" class="input-admin" name="email_address" value="{{old('email_address')}}"
                        placeholder="Email Address">
                    @error('email_address')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="telephone_number">Telephone</label>
                    <input type="text" class="input-admin" name="telephone_number" value="{{old('telephone_number')}}"
                        placeholder="Telephone Number">
                    @error('telephone_number')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>


            </div>

            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="date_of_birth">Date Of Birth</label>
                    <input type="datetime-local" class="input-admin" name="date_of_birth"
                        value="{{old('date_of_birth')}}">
                    @error('date_of_birth')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label>Gender</label>
                    <div class="flex-align-center gap-2">
                        <div class="flex-align-center gap-2">
                            <input type="radio" name="gender" id="male" value="Male">
                            <label for="male">Male</label>
                        </div>
                        <div class="flex-align-center gap-2">
                            <input type="radio" name="gender" id="female" value="Female">
                            <label for="female">Female</label>
                        </div>
                    </div>
                    @error('telephone_number')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>


            </div>

            <div class="mt-4">
                <label for="address">Address</label>
                <input type="text" class="input-admin" name="address" value="{{old('address')}}" placeholder="Address">
                @error('address')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>


            <div class="mt-4">
                <label for="aim">Whats your aim?</label>
                <input type="text" class="input-admin" name="aim" value="{{old('aim')}}" placeholder="Aim">
                @error('aim')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>

            <div class="flex justify-end">
                <button class="btn btn-primary mt-4">Add Member</button>
            </div>

            <p>Note: After adding member, you can proceed with <a href="{{ route('subscriptions.create') }}"
                    class="text-primary underline mt-2">subscriptions</a></p>

        </form>
    </div>
</x-admin-layout>