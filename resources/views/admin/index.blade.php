@extends('layouts.app')

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Posts List</div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Posts</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Users</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Active posts</th>
                                            <th scope="col">Created</th>
                                            <th scope="col">Delete post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <th scope="row">{{ $post->id }}</th>
                                                <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                                <td>{{$post->user->name}}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($post->body, 50) }}</td>
                                                <td><input type="checkbox" data-id="{{ $post->id }}" name="status" class="js-switch" {{ $post->status == 1 ? 'checked' : '' }}></td>
                                                <td>{{ $post->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                                                        @csrf
                                                    
                                                        @method('DELETE')
                                                        
                                                        <input class="submit align-middle" type="image" src="/images/delete.png" name="submit" alt="delete">
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{$user->name}}</td>
                                                <td>{{ $user->email}}</td>
                                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection


