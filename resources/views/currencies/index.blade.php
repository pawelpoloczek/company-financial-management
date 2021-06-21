@extends('base')

@section('title', 'Currencies')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('currencies.index')}}" class="breadcrumb">Currencies</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <a class="light-blue darken-1 btn " href="{{route('currencies.create')}}">
            <i class="material-icons left">add</i>Add currency
        </a>
    </div>

    <div class="col s12 mt-2">
        <table>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Symbol</th>
                <th>Actions</th>
            </tr>
            @foreach ($currencies as $currency)
                <tr>
                    <td>{{ $currency->name }}</td>
                    <td>{{ $currency->code }}</td>
                    <td>{{ $currency->symbol }}</td>
                    <td>
                        <a class="light-blue darken-1 btn" title="Edit" href="{{ route('currencies.edit', $currency->id) }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="delete-form" action="{{ route('currencies.destroy', $currency->id) }}" method="POST">
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
        {{ $currencies->links('pagination.default') }}
        </div>
    </div>

@endsection