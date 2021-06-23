@extends('base')

@section('title', 'Dashboard')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12">
        <p>Dashboard</p>
    </div>
@endsection