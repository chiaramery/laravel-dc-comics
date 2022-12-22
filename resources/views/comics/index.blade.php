@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lista dei comics</h2>
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
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection