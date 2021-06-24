@extends('base')

@section('title', 'Profile information')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="#" class="breadcrumb">{{ __('messages.profile') }}</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12">
        <ul class="collection">
            <li class="collection-item">
                <span class="title">{{ __('messages.username') }}: {{ $user->name }}</span>
                <p>{{ __('messages.email') }}: {{ $user->email }} <br></p>
            </li>
        </ul>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('update-password') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s12 m4">
                    <input placeholder="{{ __('messages.current-password') }}" id="current_password" name="current_password" type="password" class="validate" />
                    <label for="current_password">{{ __('messages.current-password') }}</label>
                </div>
                <div class="input-field col s12 m4">
                    <input placeholder="{{ __('messages.new-password') }}" id="new_password" name="new_password" type="password" class="validate" />
                    <label for="new_password">{{ __('messages.new-password') }}</label>
                </div>
                <div class="input-field col s12 m4">
                    <input placeholder="{{ __('messages.confirm-password') }}" id="confirm_password" name="confirm_password" type="password" class="validate" />
                    <label for="confirm_password">{{ __('messages.confirm-password') }}</label>
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