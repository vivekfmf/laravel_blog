@extends('layouts.master')

@section('content')

    @foreach($posts as $post)

        @include('posts.blog_post')

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection