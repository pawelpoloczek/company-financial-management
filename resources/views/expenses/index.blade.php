@extends('base')

@section('title', __('messages.expenses'))

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('expenses.index')}}" class="breadcrumb">{{ __('messages.expenses') }}</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2    ">
        <a class="light-blue darken-1 btn " href="{{route('expenses.create')}}">
            <i class="material-icons left">add</i>Add expense
        </a>
    </div>

    <div class="col s12 mt-2">
        <table>
            <tr>
                <th>{{ __('messages.name') }}</th>
                <th>{{ __('messages.type') }}</th>
                <th>{{ __('messages.date') }}</th>
                <th>{{ __('messages.net') }}</th>
                <th>{{ __('messages.gross') }}</th>
                <th>{{ __('messages.tax-rate') }}</th>
                <th class="right-align pr30">{{ __('messages.actions') }}</th>
            </tr>
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->name }}</td>
                    <td>{{ $expense->expenseType->name }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>{{ number_format($expense->net, 2, '.', ' ') }} {{$expense->currency->symbol}}</td>
                    <td>{{ number_format($expense->gross, 2, '.', ' ') }} {{$expense->currency->symbol}}</td>
                    <td>{{ $expense->taxRate->name }}</td>
                    <td class="right-align">
                        <a class="light-blue darken-1 btn" title="{{ __('messages.edit') }}" href="{{ route('expenses.edit', $expense->id) }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="delete-form" action="{{ route('expenses.destroy', $expense->id) }}" method="POST">
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
        {{ $expenses->links('pagination.default') }}
        </div>
    </div>

@endsection