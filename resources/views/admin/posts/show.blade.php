@extends('layouts.app')

@section('title', '| Post: ' . $post->title)

@section('content')

    <main>
        <div class="container">
            <div class="row">
                <div class="card m-auto mt-5 p-1" style="width: 18rem;">
                    <img src="{{ $post->post_image }}" class="card-img-top" alt="{{ $post->title }}'s image">
                    <div class="card-body">
                        <p class="card-subtitle">{{ $post->author }}</p>
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-subtitle">{{ $post->post_date }}</p>
                        <p class="card-text">{{ $post->post_content }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
