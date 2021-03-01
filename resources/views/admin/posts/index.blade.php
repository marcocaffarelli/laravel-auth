@extends('layouts.dashboard')

@section('content')
<h1>ALL POSTS FOR THE ADMIN</h1>
<a href="{{route('admin.posts.create')}}"><button class="btn bg-primary">Crea un nuovo post</button></a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td scope="row">{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>
                <a href="{{route('admin.posts.show', ['post'=> $post->slug] )}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                <a href="{{route('admin.posts.edit', ['post'=> $post->slug] )}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>
                <!-- <a href="#" class="btn btn-danger"><i class="fas fa-trash fa-xs fa-fw"></i></a> -->
                <!-- Button trigger modal -->           
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$post->slug}}" ><i class="fas fa-trash fa-xs fa-fw"></i></button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="delete-{{$post->slug}}" tabindex="-1" role="dialog" aria-labelledby="#delete-{{$post->slug}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="post-delete-{{$post->slug}}">Delete post: {{$post->title}}</h5>
                            </div>
                            <div class="modal-body">
                                Sei sicuro?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('admin.posts.destroy', $post->slug) }}" class="col" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>        
        </tr>
        @endforeach
    </tbody>
</table>
@endsection