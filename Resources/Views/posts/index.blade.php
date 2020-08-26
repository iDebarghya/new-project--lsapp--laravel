@extends('layouts.app')

@section('content')
    <h1 style="text-align:center;">Posts</h1>
    <br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                    <div class=".col-xs-6 .col-md-10">
                        <h3 style="text-align:center;"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <div class="row">
                            <div class=".col-xs-6 .col-md-10">
                                <img style="width:20%" src="/storage/cover_images/{{$post->cover_image}}">
                            </div>
                         </div>
                        <p style="text-align:center;font-size:14px">Written on {{$post->created_at}} by {{$post->user->name}}</p>
                    </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p style="font-family:courier;text-align:center;">No posts found!</p>
    @endif
@endsection