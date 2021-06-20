@extends('base')

@section('title', 'Expenses index')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('expenses.index')}}" class="breadcrumb">Expenses</a>
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
                <th>Name</th>
                <th>Date</th>
                <th>Net</th>
                <th>Gross</th>
                <th>Tax rate</th>
                <th>Actions</th>
            </tr>
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->name }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>{{ $expense->net }}</td>
                    <td>{{ $expense->gross }}</td>
                    <td>{{ $expense->tax_rate_id }}</td>
                    <td>
                        <a class="light-blue darken-1 btn" title="Edit" href="{{ route('expenses.edit', $expense->id) }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="delete-form" action="{{ route('expenses.destroy', $expense->id) }}" method="POST">
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
        {{ $expenses->links('pagination.default') }}
        </div>
    </div>

@endsection