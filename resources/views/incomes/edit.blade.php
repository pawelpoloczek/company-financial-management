@extends('base')

@section('title', 'Incomes edit')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('incomes.index')}}" class="breadcrumb">Incomes</a>
                    <a href="#" class="breadcrumb">Edit income</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('incomes.update', $income->id) }}" method="POST" >
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$income->name}}" placeholder="Name" id="name" name="name" type="text" class="validate" />
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$income->date}}" placeholder="Date" id="date" name="date" type="text" class="datepicker" />
                    <label for="date">Date</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$income->net}}" placeholder="Net" id="net" name="net" type="number" step="0.0001" class="validate" />
                    <label for="net">Net</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$income->gross}}" placeholder="Gross" id="gross" name="gross" type="number" step="0.0001" class="validate" />
                    <label for="gross">Gross</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$income->tax}}" placeholder="Tax value" id="tax" name="tax" type="number" step="0.0001" class="validate" />
                    <label for="tax">Tax value</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$income->tax_rate_id}}" placeholder="Tax rate" id="tax_rate_id" name="tax_rate_id" type="number" class="validate" />
                    <label for="tax_rate_id">Tax rate</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="income_type_id" id="income_type_id">
                        @foreach ($incomeTypes as $incomeType)
                            <option value="{{$incomeType->id}}"
                                    @if ($incomeType->id === $income->income_type_id)
                                    selected="selected"
                                    @endif>{{$incomeType->name}}</option>
                        @endforeach
                    </select>
                    <label for="income_type_id">Select income type:</label>
                </div>
                <div class="input-field col s6">
                    <select name="currency_id" id="currency_id">
                        @foreach ($currencies as $currency)
                            <option value="{{$currency->id}}"
                                    @if ($currency->id === $income->currency_id)
                                    selected="selected"
                                    @endif>{{$currency->name}} ({{$currency->code}})</option>
                        @endforeach
                    </select>
                    <label for="expense_type_id">Select currency:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <textarea id="description" name="description" class="materialize-textarea">{{$income->description}}</textarea>
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