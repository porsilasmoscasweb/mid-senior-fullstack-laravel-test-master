@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
@forelse ($games as $game)

        <div class="col-md-2">
            <div class="card">
                <img src="{{ asset($game->image_url) }}" class="card-img-top" alt="{{ $game->name }}" title="{{ $game->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->name }}</h5>
                    <p class="card-text">{{ Str::limit($game->description, 100) }}</p>
                    <div class="h-100 d-flex flex-row">
                        <a href="{{ route('game.show', $game->id) }}" class="btn btn-primary me-2">View</a>
                        <a href="{{ route('game.destroy', $game->id) }}" class="btn btn-warning position-end">Delete</a>
                    </div>
                </div>
            </div>
        </div>

@empty
    <p>No Games</p>
@endforelse
    </div>
</div>

@stop
