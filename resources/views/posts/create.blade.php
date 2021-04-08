@extends('layouts.app')
@section('title', 'Create post')

@section('content')
    <h1>Create post</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control shadow-sm" type="text" name="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control shadow-sm" name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            
            <input  type="file" name="cover_image" id="">
        </div>

        <div class="form-group">
            <input class="shadow-sm" type="submit" value="Create">
        </div>
    </form>
@endsection