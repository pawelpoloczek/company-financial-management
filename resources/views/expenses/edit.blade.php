@extends('base')

@section('title', __('messages.expenses'))

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('expenses.index')}}" class="breadcrumb">{{ __('messages.expenses') }}</a>
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
                    <input value="{{$expense->name}}" placeholder="{{ __('messages.name') }}" id="name" name="name" type="text" class="validate" />
                    <label for="name">{{ __('messages.name') }}</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$expense->date}}" placeholder="{{ __('messages.date') }}" id="date" name="date" type="text" class="datepicker" />
                    <label for="date">{{ __('messages.date') }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$expense->net}}" placeholder="{{ __('messages.net') }}" id="net" name="net" type="number" step="0.0001" class="validate" />
                    <label for="net">{{ __('messages.net') }}</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$expense->gross}}" placeholder="{{ __('messages.gross') }}" id="gross" name="gross" type="number" step="0.0001" class="validate" />
                    <label for="gross">{{ __('messages.gross') }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$expense->tax}}" placeholder="{{ __('messages.tax-value') }}" id="tax" name="tax" type="number" step="0.0001" class="validate" />
                    <label for="tax">{{ __('messages.tax-value') }}</label>
                </div>
                <div class="input-field col s6">
                    <select name="tax_rate_id" id="tax_rate_id">
                        @foreach ($taxRates as $taxRate)
                            <option value="{{$taxRate->id}}"
                                    @if ($taxRate->id === $expense->tax_rate_id)
                                    selected="selected"
                                    @endif>{{$taxRate->name}}</option>
                        @endforeach
                    </select>
                    <label for="tax_rate_id">{{ __('messages.select-tax-rate') }}:</label>
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
                    <label for="expense_type_id">{{ __('messages.select-expense-type') }}:</label>
                </div>
                <div class="input-field col s6">
                    <select name="currency_id" id="currency_id">
                        @foreach ($currencies as $currency)
                            <option value="{{$currency->id}}"
                            @if ($currency->id === $expense->currency_id)
                                selected="selected"
                            @endif>{{$currency->name}} ({{$currency->code}})</option>
                        @endforeach
                    </select>
                    <label for="expense_type_id">{{ __('messages.select-currency') }}:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="description" name="description" class="materialize-textarea">{{$expense->description}}</textarea>
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