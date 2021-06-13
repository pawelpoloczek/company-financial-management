@extends('base')

@section('title', 'Expenses edit')

@section('content')
    <nav>
        <div class="nav-wrapper light-blue darken-1">
            <div class="col s12">
                <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="col s12">
        <p>Edit</p>
    </div>
@endsection