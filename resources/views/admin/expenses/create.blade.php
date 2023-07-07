<x-admin-layout>
    <div class="card">
        <form action="{{ route('expenses.store') }}" method="POST">
            @csrf
            <div class="mt-4">
                <label for="name">Name</label>
                <input type="text" class="input-admin" name="name" value="{{old('name')}}" placeholder="Name">
                @error('name')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>
            <div class="mt-4">
                <label for="category">Category</label>
                <select class="input-admin" name="expense_category_id" value="{{old('category')}}">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <small class="text-secondaryRed">{{$message}}</small>
                @enderror
            </div>

            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="total_amount">Total Amount</label>
                    <input type="number" class="input-admin" name="total_amount" value="{{old('total_amount')}}"
                        placeholder="Total Amount">
                    @error('total_amount')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="amount_spent">Amount Spent</label>
                    <input type="number" class="input-admin" name="amount_spent" value="{{old('amount_spent')}}"
                        placeholder="Amount Spent">

                    @error('amount_spent')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="amount_due">Amount Due</label>
                    <input type="number" class="input-admin" name="amount_due" value="{{old('amount_due')}}"
                        placeholder="Amount Due">
                    @error('amount_due')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

            </div>
            <div class="flex justify-end">
                <button class="btn btn-primary mt-4">Add Expense</button>
            </div>
        </form>
    </div>
</x-admin-layout>