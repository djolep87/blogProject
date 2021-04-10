@extends('layouts.app')
@section('title', 'Create post')

@section('content')
    <h1>Create post</h1>

    <form action="/posts" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control shadow-sm" type="text" name="title" placeholder="Title">
        </div>

        <div class="form-group" id="editor">
            <label for="body">Body</label>
            <textarea class="form-control shadow-sm" name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            
            <input  type="file" name="cover_image" id="">
        </div>

        <div class="form-group">
            <input  class="form-control shadow-sm btn btn-outline-success" type="submit" value="Create blog">
        </div>
    </form>
@endsection