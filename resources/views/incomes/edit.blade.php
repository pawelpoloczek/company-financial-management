@extends('base')

@section('title', __('messages.incomes'))

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('incomes.index')}}" class="breadcrumb">{{ __('messages.incomes') }}</a>
                    <a href="#" class="breadcrumb">{{ __('messages.edit') }}</a>
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
                    <input value="{{$income->name}}" placeholder="{{ __('messages.name') }}" id="name" name="name" type="text" class="validate" />
                    <label for="name">{{ __('messages.name') }}</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$income->date}}" placeholder="{{ __('messages.date') }}" id="date" name="date" type="text" class="datepicker" />
                    <label for="date">{{ __('messages.date') }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$income->net}}" placeholder="{{ __('messages.net') }}" id="net" name="net" type="number" step="0.0001" class="validate" />
                    <label for="net">{{ __('messages.net') }}</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{$income->gross}}" placeholder="{{ __('messages.gross') }}" id="gross" name="gross" type="number" step="0.0001" class="validate" />
                    <label for="gross">{{ __('messages.gross') }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$income->tax}}" placeholder="{{ __('messages.tax-value') }}" id="tax" name="tax" type="number" step="0.0001" class="validate" />
                    <label for="tax">{{ __('messages.tax-value') }}</label>
                </div>
                <div class="input-field col s6">
                    <select name="tax_rate_id" id="tax_rate_id">
                        @foreach ($taxRates as $taxRate)
                            <option value="{{$taxRate->id}}"
                                    @if ($taxRate->id === $income->tax_rate_id)
                                    selected="selected"
                                    @endif>{{$taxRate->name}}</option>
                        @endforeach
                    </select>
                    <label for="tax_rate_id">{{ __('messages.select-tax-rate') }}:</label>
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
                    <label for="income_type_id">{{ __('messages.select-income-type') }}:</label>
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
                    <label for="expense_type_id">{{ __('messages.select-currency') }}:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <textarea id="description" name="description" class="materialize-textarea">{{$income->description}}</textarea>
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