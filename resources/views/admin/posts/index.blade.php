@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <nav style="background: transparent;" >
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    </ol>
                </nav>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.posts.create') }}">
                                <span data-feather="file">Crea Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-md-9">
            <div class="card no_border">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss='alert'>x</button>
                    <strong>{{$message}}</strong>
                </div>
                @endif
                @if (count($posts) == 0)
                    <h1 class="no_border">Non hai nessun post. Creane uno!</h1>
                @else
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                            <td>
                                <a href="{{route('admin.posts.show', $post->id)}}">
                                    <button type="button" class="btn btn-primary">Visualizza</button>
                                </a>
                                <a href="{{route('admin.posts.edit',$post->id)}}">
                                    <button type="button" class="btn btn-warning">Modifica</button>
                                </a>
                                <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                </form>
                            </td>
                        </tr>                                  
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection