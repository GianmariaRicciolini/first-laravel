@extends('templates.base')

@section('title', 'Libreria')

@section('content')
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $book->image }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">Autore: {{ $book->author }}</p>
                        <p class="card-text">Genere: {{ $book->genre }}</p>
                        <p class="card-text">Anno pubblicazione: {{ $book->published_at }}</p>
                        <p class="card-text">{{ $book->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection