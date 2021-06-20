@extends('base')

@section('title', 'Currency create')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('currencies.index')}}" class="breadcrumb">Currencies</a>
                    <a href="#" class="breadcrumb">Add new currency</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('currencies.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Name" id="name" name="name" type="text" class="validate" />
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Code" id="code" name="code" type="text" class="validate" />
                    <label for="code">Code</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Symbol" id="symbol" name="symbol" type="text" class="validate" />
                    <label for="name">Symbol</label>
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