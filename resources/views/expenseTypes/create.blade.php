@extends('base')

@section('title', 'Expense type create')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('expenseTypes.index')}}" class="breadcrumb">Expense types</a>
                    <a href="#" class="breadcrumb">Add new expense type</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('expenseTypes.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Name" id="name" name="name" type="text" class="validate" />
                    <label for="name">Name</label>
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