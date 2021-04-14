@extends('layouts.app')
@section('title',"Edit post")


@section('content')
<h1>Update post</h1>

<form action={{route('posts.update',$post->id)}} method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{-- @method('patch') --}}
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control shadow-sm" type="text" name="title" value="{{$post->title}}" placeholder="Title">
    </div>

    <div class="form-group" id="editor">
        <label for="body">Body</label>
        <textarea class="form-control shadow-sm" name="body" id="mytextarea"  cols="30" rows="10">{{$post->body}}</textarea>
    </div>

    <div class="form-group">
        <input  type="file" name="cover_image" value="{{$post->cover_image}}" id="">
    </div>

    <div class="form-group">
       
        <input type="hidden" name="_method" value="PUT">
        <input  class="form-control shadow-sm btn btn-outline-success" type="submit" value="Update post">
    </div>
</form>
@endsection