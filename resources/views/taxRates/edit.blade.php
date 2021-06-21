@extends('base')

@section('title', 'Tax rate edit')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('taxRates.index')}}" class="breadcrumb">Tax rates</a>
                    <a href="#" class="breadcrumb">Edit tax rate</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <form action="{{ route('taxRates.update', $taxRate->id) }}" method="POST" >
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="input-field col s6">
                    <input value="{{ $taxRate->name }}" placeholder="Name" id="name" name="name" type="text" class="validate" />
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input value="{{ $taxRate->value }}" placeholder="Value" id="value" name="value" type="number" step="0.01" class="validate" />
                    <label for="value">Value</label>
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