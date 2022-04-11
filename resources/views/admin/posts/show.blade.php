@extends('layouts.app')

@section('content')
    <div class="container">
        <figure>
            <img src="{{ $post->slug }}" alt="">
        </figure>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <div>{{ $post->image }}</div>
        <a href="{{ route('admin.posts.index') }}">Home</a>
        <a href='{{ route('admin.posts.edit', $post->id) }}'
            class="btn btn-danger">Modifica</a>
    </div>
@endsection

