@extends('base')

@section('title', 'Profile information')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="#" class="breadcrumb">Profile</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12">
        <ul class="collection">
            <li class="collection-item">
{{--            <li class="collection-item avatar">--}}
{{--                <img src="" alt="" class="circle">--}}
                <span class="title">Username: {{ $user->name }}</span>
                <p>Email: {{ $user->email }} <br></p>
{{--                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>--}}
            </li>
        </ul>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('update-password') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s12 m4">
                    <input placeholder="Current password" id="current_password" name="current_password" type="password" class="validate" />
                    <label for="current_password">Current password</label>
                </div>
                <div class="input-field col s12 m4">
                    <input placeholder="New password" id="new_password" name="new_password" type="password" class="validate" />
                    <label for="new_password">New password</label>
                </div>
                <div class="input-field col s12 m4">
                    <input placeholder="Confirm password" id="confirm_password" name="confirm_password" type="password" class="validate" />
                    <label for="confirm_password">Confirm password</label>
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