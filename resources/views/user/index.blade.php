@extends('layouts.app')

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/posts/create" class="btn btn-primary">Create new post</a>
                        <hr>

                        <div>
                            @if (count($posts) > 0)
                            
                        
                            <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                        </td>

                                        <td>
                                            <small style="font-size: 11px">Created: {{$post->created_at->diffForHumans()}}<br> Author: {{$post->user->name}}</small>
                                        </td>

                                        <td>
                                            <a href="/posts/{{ $post->id }}/edit" class="align-middle"><img src="/images/edit.png" alt="edit"></a>
                                        </td>

                                        <td>
                                            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                                                @csrf
                                            
                                                @method('DELETE')
                                                
                                                <input class="submit align-middle" type="image" src="/images/delete.png" name="submit" alt="delete">
                                        
                                                {{-- <button type="submit" src=""  ><img src="/images/delete.png" alt=""></button> --}}
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts! Please create your post!</p>
                        @endif
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection