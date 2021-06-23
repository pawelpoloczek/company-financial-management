@extends('base')

@section('title', 'Incomes index')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">{{ __('messages.dashboard') }}</a>
                    <a href="{{route('incomes.index')}}" class="breadcrumb">Incomes</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <a class="light-blue darken-1 btn " href="{{route('incomes.create')}}">
            <i class="material-icons left">add</i>Add income
        </a>
    </div>

    <div class="col s12 mt-2">
        <table>
            <tr>
                <th>{{ __('messages.name') }}</th>
                <th>{{ __('messages.name') }}</th>
                <th>{{ __('messages.date') }}</th>
                <th>{{ __('messages.net') }}</th>
                <th>Gross</th>
                <th>Tax rate</th>
                <th class="right-align pr30">{{ __('messages.actions') }}</th>
            </tr>
            @foreach ($incomes as $income)
                <tr>
                    <td>{{ $income->name }}</td>
                    <td>{{ $income->incomeType->name }}</td>
                    <td>{{ $income->date }}</td>
                    <td>{{ number_format($income->net, 2, '.', ' ') }} {{$income->currency->symbol}}</td>
                    <td>{{ number_format($income->gross, 2, '.', ' ') }} {{$income->currency->symbol}}</td>
                    <td>{{ $income->taxRate->name }}</td>
                    <td class="right-align">
                        <a class="light-blue darken-1 btn" title="Edit" href="{{ route('incomes.edit', $income->id) }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="delete-form" action="{{ route('incomes.destroy', $income->id) }}" method="POST">
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
        {{ $incomes->links('pagination.default') }}
        </div>
    </div>

@endsection