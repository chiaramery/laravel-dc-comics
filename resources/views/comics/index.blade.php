@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lista dei comics</h2>
        <a class="btn btn-danger" href="{{ route('comics.create') }}">
            <i class="fa-solid fa-plus"></i>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Seria</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">
                                <i class="fa-solid fa-info"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.show', $comic->id) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{route('comics.destroy', $comic->id)}}" class="d-inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection