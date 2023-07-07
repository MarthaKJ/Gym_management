<x-admin-layout>
    <div class="flex-center-between">
        <h1 class="text-3xl">Expenses</h1>
        <a href="{{ route('expenses.create') }}" class="btn btn-primary">Add Expense</a>
    </div>
    <div class="table-wrapper border p-4 rounded-lg card mt-6 w-full overflow-auto">
        <table id="my-table" class="table table-striped w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Total Amount</th>
                    <th>Amount Spent</th>
                    <th>Amount Due</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                <tr>
                    <td>{{$expense->name}}</td>
                    <td>{{$expense->category->name}}</td>
                    <td>Ugx {{number_format($expense->total_amount, 0, ',')}}/=</td>
                    <td>Ugx {{number_format($expense->amount_spent, 0, ',')}}/=</td>
                    <td>Ugx {{number_format($expense->amount_due, 0, ',')}}/=</td>
                    <td>
                        <div class="flex-align-center">
                            <a href="expenses/{{$expense->id}}/edit" class="icon-box inline"><i
                                    class="feather-edit text-green-500"></i></a>
                            <form action="/admin/expenses/{{$expense->id}}" method="POST">
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