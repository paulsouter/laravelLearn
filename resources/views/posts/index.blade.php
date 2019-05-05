@extends('layouts.app')

@section('content')

    <h1>posts</h1>

    @if(count($posts) >= 1)
        @foreach($posts as $post)
            <div class="card">
                <h3>{{$post->title}}</h3>
            </div>
            @endforeach
    @else
        <p>no posts found</p>;
    @endif

@endSection()