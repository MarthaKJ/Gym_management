<x-admin-layout>
    <div class="card">
        <form action="/admin/subscriptions/{{$subscription->id}}" method="post">

            @csrf
            @method('PUT')
            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="member">Member</label>
                    <select class="input-admin" name="member_id" value="{{old('member')}}">
                        @foreach ($members as $member)
                        <option value="{{$member->id}}">{{$member->first_name .' '. $member->last_name}}</option>
                        @endforeach
                    </select>
                    @error('member')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="plan">Plan</label>
                    <select class="input-admin" name="plan_id" value="{{old('plan')}}">
                        @foreach ($plans as $plan)
                        <option value="{{$plan->id}}">{{$plan->name}}</option>
                        @endforeach
                    </select>
                    @error('plan')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

            </div>

            <div class="flex-align-center flex-col sm:flex-row gap-4 mt-4">

                <div class="flex-1 w-full sm:w-fit">
                    <label for="amount_received">Amount Received</label>
                    <input type="number" class="input-admin" name="amount_received"
                        value="{{old('amount_received', $subscription->amount_received)}}" placeholder="Total Amount">
                    @error('amount_received')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label for="amount_pending">Amount Pending</label>
                    <input type="number" class="input-admin" name="amount_pending"
                        value="{{old('amount_pending', $subscription->amount_pending)}}" placeholder="Amount Pending">

                    @error('amount_pending')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex-1 w-full sm:w-fit">
                    <label>Payment method</label>
                    <div class="flex-align-center gap-2">
                        <div class="flex-align-center gap-2">
                            <input type="radio" name="payment_mode" id="cash" value="Cash" {{$subscription->payment_mode
                            ==
                            'Cash' ? 'required="true"' : 'required="false"'}}>
                            <label for="cash">Cash</label>
                        </div>
                        <div class="flex-align-center gap-2">
                            <input type="radio" name="payment_mode" id="mobile_money" value="Mobile Money"
                                {{$subscription->payment_mode == 'Mobile Money' ? 'required="true"' :
                            'required="false"'}}>
                            <label for="mobile_money">Mobile Money</label>
                        </div>
                        <div class="flex-align-center gap-2">
                            <input type="radio" name="payment_mode" id="credit_card" value="Credit Card"
                                {{$subscription->payment_mode == 'Credit Card' ? 'required="true"' :
                            'required="false"'}}>
                            <label for="credit_card">Credit Card</label>
                        </div>
                    </div>
                    @error('credit_card')
                    <small class="text-secondaryRed">{{$message}}</small>
                    @enderror
                </div>

            </div>
            <div class="flex justify-end">
                <button class="btn btn-primary mt-4">Edit Subscription</button>
            </div>
        </form>
    </div>
</x-admin-layout>