@extends('base')

@section('title', 'Expenses edit')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('expenses.index')}}" class="breadcrumb">Expenses</a>
                    <a href="#" class="breadcrumb">Edit expense</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('expenses.update', $expense->id) }}" method="POST" >
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$expense->name}}" placeholder="Name" id="name" name="name" type="text" class="validate" />
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$expense->date}}" placeholder="Date" id="date" name="date" type="text" class="datepicker" />
                    <label for="date">Date</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$expense->net}}" placeholder="Net" id="net" name="net" type="number" step="0.0001" class="validate" />
                    <label for="net">Net</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$expense->gross}}" placeholder="Gross" id="gross" name="gross" type="number" step="0.0001" class="validate" />
                    <label for="gross">Gross</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$expense->tax}}" placeholder="Tax value" id="tax" name="tax" type="number" step="0.0001" class="validate" />
                    <label for="tax">Tax value</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$expense->tax_rate_id}}" placeholder="Tax rate" id="tax_rate_id" name="tax_rate_id" type="number" class="validate" />
                    <label for="tax_rate_id">Tax rate</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="expense_type_id" id="expense_type_id">
                        @foreach ($expenseTypes as $expenseType)
                            <option value="{{$expenseType->id}}"
                            @if ($expenseType->id === $expense->expense_type_id)
                                selected="selected"
                            @endif>{{$expenseType->name}}</option>
                        @endforeach
                    </select>
                    <label for="expense_type_id">Select expense type:</label>
                </div>
                <div class="input-field col s6">
                    <textarea id="description" name="description" class="materialize-textarea">{{$expense->description}}</textarea>
                    <label for="description">Description</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="btn light-blue darken-1">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection