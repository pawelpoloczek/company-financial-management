@extends('base')

@section('title', 'Income types')

@section('content')
    <div class="col s12">
        <nav>
            <div class="nav-wrapper light-blue darken-1">
                <div class="col s12">
                    <a href="{{route('dashboard')}}" class="breadcrumb">Dashboard</a>
                    <a href="{{route('incomeTypes.index')}}" class="breadcrumb">Income types</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="col s12 mt-2">
        <a class="light-blue darken-1 btn " href="{{route('incomeTypes.create')}}">
            <i class="material-icons left">add</i>Add income type
        </a>
    </div>

    <div class="col s12 mt-2">
        <table>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            @foreach ($incomeTypes as $incomeType)
                <tr>
                    <td>{{ $incomeType->name }}</td>
                    <td>
                        <a class="light-blue darken-1 btn" title="Edit" href="{{ route('incomeTypes.edit', $incomeType->id) }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="delete-form" action="{{ route('incomeTypes.destroy', $incomeType->id) }}" method="POST">
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
        {{ $incomeTypes->links('pagination.default') }}
        </div>
    </div>

@endsection