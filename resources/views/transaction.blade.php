@extends('layouts.template')

@section('title', 'Transaction Us')

@section('content')
<div class="mt-4 p-5 bg-dark text-white rounded">
    <h1>Transaction Us</h1>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<div class="row my-5">
    <div class="col-6">
        <form action="" method="POST">
            @csrf
            <div class="mb-3 col-md-8 col-sm-12">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id">
                value="{{ old('id') }}">
            </div>
            <div class="mb-3 col-md-8 col-sm-12">
                <label for="amount" class="form-label">Amount</label>
                <input type="amount" class="form-control" name="amount">
                value="{{ old('amount') }}">
            </div>
            <div class="mb-3 col-md-8 col-sm-12">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type">
                value="{{ old('type') }}">
            </div>
            <div class="mb-3 col-md-8 col-sm-12">
                <label for="category" class="form-label">Category</label>
                <select>
                    <option value="uncategorized">Uncategory</option>
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                </select>
                <select>
                    <option value="income">Income</option>
                    <option value="wage">Wage</option>
                    <option value="bonus">Bonus</option>
                    <option value="gift">Gift</option>
                </select>
                <select>
                    <option value="expense">Expense</option>
                    <option value="food&drinks">Foof&Drinks</option>
                    <option value="shopping">Shopping</option>
                    <option value="charity">Charity</option>
                    <option value="housing">Housing</option>
                    <option value="insurance">Insurance</option>
                    <option value="taxes">Taxes</option>
                    <option value="transportaion">Transportation</option>
                </select>
                <input type="text" class="form-control" name="category">
                value="{{ old('category') }}">
            </div>
            <div class="mb-3 col-md-8 col-sm-12">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes">
                value="{{ old('notes') }}">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>
@endsection
