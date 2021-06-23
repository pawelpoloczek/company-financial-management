@extends('base')

@section('title', 'Expense type edit')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('expenseTypes.index')}}" class="breadcrumb">Expense types</a>
                    <a href="#" class="breadcrumb">Edit expense type</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('expenseTypes.update', $expenseType->id) }}" method="POST" >
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{$expenseType->name}}" placeholder="{{ __('messages.name') }}" id="name" name="name" type="text" class="validate" />
                    <label for="name">{{ __('messages.name') }}</label>
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