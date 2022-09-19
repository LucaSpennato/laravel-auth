@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @forelse ($posts as $post)
                        
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->title }} - $</td>
                                <td>{{ $post->date }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                        <h5>
                            Non ci sono post.
                        </h5>
                        @endforelse
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
@endsection
