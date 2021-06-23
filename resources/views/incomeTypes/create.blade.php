@extends('base')

@section('title', 'Income type create')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('incomeTypes.index')}}" class="breadcrumb">Income types</a>
                    <a href="#" class="breadcrumb">Add new income type</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('incomeTypes.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="{{ __('messages.name') }}" id="name" name="name" type="text" class="validate" />
                    <label for="name">{{ __('messages.name') }}</label>
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