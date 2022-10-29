@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8 col-xl-7">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-md-6 text-center">
                        <img src="https://media.vandal.net/m/43395/super-mario-odyssey-2017102611035_25.jpg" class="img-fluid p-4" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body py-4">
                            <h2 class="card-title">{{ $game->title }}</h2>
                            <div class="mb-2">
                                <h4>Platform</h4>
                                <p>{{ $game->platform }}</p>
                            </div>
                            <div class="mb-2">
                                <h4>Description</h4>
                                <p class="card-text">{{ $game->description }}</p>
                            </div>
                            <div class="mb-2">
                                <h4>Release date</h4>
                                <p>{{ $game->release_date }}</p>
                            </div>
                            <div class="mb-2">
                                <h4>Nintendo eShop price</h4>
                                <p>{{ $game->price }} €</p>
                            </div>
                            <div class="mb-2">
                                <a href="{{ route('game.index') }}" class="btn btn-dark">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
