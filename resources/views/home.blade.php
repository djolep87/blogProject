@extends('layouts.app')

@section('content')
<h1 class="text-center" id="middle" style="padding-top: 40px;"><strong>Posts</strong> </h1>
<hr>
@if(count($posts) > 0)
    @foreach ($posts as $post)
    
        <!-- Grid row -->
        <div class="row">
                <!-- Grid column -->
                <div class="col-lg-5 col-xl-4">
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                        <img class="shadow-lg" style="width: 100%; height: 250px;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                </div>         
                <!-- Grid column -->
                <div class="col-lg-7 col-xl-8">
            
                    <!-- Post title -->
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <!-- Excerpt -->
                    <div style="font-size: 14px">
                        {{\Illuminate\Support\Str::limit($post->body, 500)}}
                    </div>
                    {{-- {{str_limit($post->body, 500)}} --}} 
                    <!-- Post data -->
                    <small style="font-size: 12px">Created at: {{$post->created_at->toFormattedDateString()}}<br> Author: {{$post->user->name}}</small>
                    <!-- Read more button -->
                    <a class="btn btn-primary btn-md" href="/posts/{{$post->id}}">More</a>
                    
                </div>
                <!-- Grid column -->
            
        </div>
        <hr class="my-5">
    @endforeach 
    {{$posts->links()}}
        @else

            <p>No posts!</p>   


@endif
@endsection
