@extends('layouts.app')

@section('main-content')
    <div class="my-card m-3">
        <h1 class="text-center">{{ $comic->title }}</h1>
        <div class="d-flex">
            <div class="img-container">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="info-card">
                <ul class="d-flex flex-column justify-content-between h-100">
                    <li><strong>Description:</strong> {{ $comic->description }}</li>
                    <li><strong>Price:</strong> {{ $comic->price }}</li>
                    <li><strong>Type:</strong> {{ $comic->type }}</li>
                    <li><strong>Artists:</strong> {{ $comic->artists }}</li>
                    <li><strong>Writers:</strong> {{ $comic->writers }}</li>
                    <li><strong>Sale date:</strong> {{ $comic->sale_date }}</li>
                    <li><strong>Series:</strong> {{ $comic->series }}</li>
                </ul>
            </div>
        </div>
        <form action="{{ route('deleteComic', $comic->id) }}" class="d-inline form-terminator" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-warning me-2">
                Delete
            </button>
        </form>
    </div>
@endsection
