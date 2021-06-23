@extends('base')

@section('title', 'Income types')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('taxRates.index')}}" class="breadcrumb">Tax rates</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <a class="light-blue darken-1 btn " href="{{route('taxRates.create')}}">
            <i class="material-icons left">add</i>Add tax rate
        </a>
    </div>

    <div class="col s12 mt-2">
        <table>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th class="right-align pr30">Actions</th>
            </tr>
            @foreach ($taxRates as $taxRate)
                <tr>
                    <td>{{ $taxRate->name }}</td>
                    <td>{{ $taxRate->value }}</td>
                    <td class="right-align">
                        <a class="light-blue darken-1 btn" title="Edit" href="{{ route('taxRates.edit', $taxRate->id) }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="delete-form" action="{{ route('taxRates.destroy', $taxRate->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="red darken-1 btn" title="Delete">
                                <i class="material-icons">delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="center-align mt-2">
        {{ $taxRates->links('pagination.default') }}
        </div>
    </div>

@endsection