@extends('base')

@section('title', __('messages.tax-rates'))

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('taxRates.index')}}" class="breadcrumb">{{ __('messages.tax-rates') }}</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <a class="light-blue darken-1 btn " href="{{route('taxRates.create')}}">
            <i class="material-icons left">add</i>{{ __('messages.add') }}
        </a>
    </div>

    <div class="col s12 mt-2">
        <table>
            <tr>
                <th>{{ __('messages.name') }}</th>
                <th>{{ __('messages.value') }}</th>
                <th class="right-align pr30">{{ __('messages.actions') }}</th>
            </tr>
            @foreach ($taxRates as $taxRate)
                <tr>
                    <td>{{ $taxRate->name }}</td>
                    <td>{{ $taxRate->value }}</td>
                    <td class="right-align">
                        <a class="light-blue darken-1 btn" title="{{ __('messages.edit') }}" href="{{ route('taxRates.edit', $taxRate->id) }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="delete-form" action="{{ route('taxRates.destroy', $taxRate->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="red darken-1 btn" title="{{ __('messages.delete') }}">
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