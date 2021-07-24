@extends('base')

@section('title',  __('messages.expenses') )

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('expenses.index')}}" class="breadcrumb">{{ __('messages.expenses') }}</a>
                    <a href="#" class="breadcrumb">{{ __('messages.add') }}</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('expenses.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="{{ __('messages.name') }}" id="name" name="name" type="text" class="validate" />
                    <label for="name">{{ __('messages.name') }}</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="{{ __('messages.date') }}" id="date" name="date" type="text" class="datepicker" />
                    <label for="date">{{ __('messages.date') }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="{{ __('messages.value') }}" id="value" name="value" type="number" step="0.0001" class="validate" />
                    <label for="value">{{ __('messages.value') }}</label>
                </div>
                <div class="input-field col s6">
                    <select name="value_type" id="value_type">
                        <option value="0">{{ __('messages.net') }}</option>
                        <option value="1">{{ __('messages.gross') }}</option>
                    </select>
                    <label for="value_type">{{ __('messages.value-type') }}:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="tax_rate_id" id="tax_rate_id">
                        @foreach ($taxRates as $taxRate)
                            <option value="{{$taxRate->id}}">{{$taxRate->name}}</option>
                        @endforeach
                    </select>
                    <label for="tax_rate_id">{{ __('messages.select-tax-rate') }}:</label>
                </div>
                <div class="input-field col s6">
                    <select name="expense_type_id" id="expense_type_id">
                        @foreach ($expenseTypes as $expenseType)
                            <option value="{{$expenseType->id}}">{{$expenseType->name}}</option>
                        @endforeach
                    </select>
                    <label for="expense_type_id">{{ __('messages.select-expense-type') }}:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="currency_id" id="currency_id">
                        @foreach ($currencies as $currency)
                            <option value="{{$currency->id}}">{{$currency->name}} ({{$currency->code}})</option>
                        @endforeach
                    </select>
                    <label for="currency_id">{{ __('messages.select-currency') }}:</label>
                </div>
                <div class="input-field col s6">
                    <textarea id="description" name="description" class="materialize-textarea"></textarea>
                    <label for="description">{{ __('messages.description') }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="btn light-blue darken-1">{{ __('messages.submit') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection