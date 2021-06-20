@extends('base')

@section('title', 'Expenses create')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('expenses.index')}}" class="breadcrumb">Expenses</a>
                    <a href="#" class="breadcrumb">Add new expense</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('expenses.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Name" id="name" name="name" type="text" class="validate" />
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Date" id="date" name="date" type="text" class="datepicker" />
                    <label for="date">Date</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Net" id="net" name="net" type="number" step="0.0001" class="validate" />
                    <label for="net">Net</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Gross" id="gross" name="gross" type="number" step="0.0001" class="validate" />
                    <label for="gross">Gross</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Tax value" id="tax" name="tax" type="number" step="0.0001" class="validate" />
                    <label for="tax">Tax value</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Tax rate" id="tax_rate_id" name="tax_rate_id" type="number" class="validate" />
                    <label for="tax_rate_id">Tax rate</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="expense_type_id" id="expense_type_id">
                        @foreach ($expenseTypes as $expenseType)
                            <option value="{{$expenseType->id}}">{{$expenseType->name}}</option>
                        @endforeach
                    </select>
                    <label for="expense_type_id">Select expense type:</label>
                </div>
                <div class="input-field col s6">
                    <textarea id="description" name="description" class="materialize-textarea"></textarea>
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