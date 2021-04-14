@extends('layouts.app')

@section('content')
    <a href="javascript:history.back()"  class="btn btn-default">Back</a>
    <hr>

    <h1 class="content text-center"><strong>{{$post->title}}</strong></h1><br>
    <br>
    <br>

    <img style="with:100%; display: block; margin-left: auto; margin-right: auto; width: 40%;" class="align-center shadow-lg" src="/storage/cover_images/{{$post->cover_image}}" alt="" >
    <br><br>
    
    <div style="font-size: 14px">
        {!!$post->body!!}
    </div>
    <hr>
    <small style="font-size: 11px">Created at: {{$post->created_at->toFormattedDateString()}}<br> Author: {{$post->user->name}}</small>
@endsection