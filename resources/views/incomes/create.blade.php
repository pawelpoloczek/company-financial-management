@extends('base')

@section('title', 'Incomes create')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('incomes.index')}}" class="breadcrumb">Incomes</a>
                    <a href="#" class="breadcrumb">Add new income</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('incomes.store') }}" method="POST" >
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
                    <input placeholder="Income type" id="income_type_id" name="income_type_id" type="number" class="validate" />
                    <label for="Income_type_id">Income type</label>
                </div>
                <div class="input-field col s6">
                    <select name="currency_id" id="currency_id">
                        @foreach ($currencies as $currency)
                            <option value="{{$currency->id}}">{{$currency->name}} ({{$currency->code}})</option>
                        @endforeach
                    </select>
                    <label for="currency_id">Select currency:</label>
                </div>
            </div>
            <div class="row">
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