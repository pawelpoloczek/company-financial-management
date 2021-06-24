@extends('base')

@section('title', __('messages.currencies'))

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('currencies.index')}}" class="breadcrumb">{{ __('messages.currencies') }}</a>
                    <a href="#" class="breadcrumb">{{ __('messages.add') }}</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('currencies.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="{{ __('messages.name') }}" id="name" name="name" type="text" class="validate" />
                    <label for="name">{{ __('messages.name') }}</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="{{ __('messages.code') }}" id="code" name="code" type="text" class="validate" />
                    <label for="code">{{ __('messages.code') }}</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="{{ __('messages.symbol') }}" id="symbol" name="symbol" type="text" class="validate" />
                    <label for="name">{{ __('messages.symbol') }}</label>
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