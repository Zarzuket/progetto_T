
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
            <div class="card">
                <div class="card-header mx-auto no_border">Crea il nuovo post</div>
                <div class="card-body">
					<form action="{{route("admin.posts.store")}}" enctype="multipart/form-data" method="POST">
						@csrf
						{{-- TITOLO POST --}}
						<div class="form-group">
						  <label for="title">Titolo</label>
						  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Inserisci il titolo" value="{{old("title")}}">
						  @error('title')
							<div class="alert alert-danger">{{ $message }}</div>
						  @enderror
						</div>
						{{-- DESCRIZIONE POST --}}
						<div class="form-group">
							<label for="description">Descrizione</label>
							<textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10" placeholder="Inserisci il contenuto">{{old("description")}}</textarea>
							@error('description')
								<div class="alert alert-danger">{{ $message }}</div>
						    @enderror
						</div>
						{{-- PREVIEW --}}
						<div class="form-group">
							<label for="preview">Preview</label>
							<textarea class="form-control @error('preview') is-invalid @enderror" name="preview" id="preview" cols="30" rows="10" placeholder="Inserisci il contenuto">{{old("preview")}}</textarea>
							@error('preview')
								<div class="alert alert-danger">{{ $message }}</div>
						    @enderror
						</div>
						{{-- CATEGORIA --}}
						<div class="form-group">
							<label for="category">Categoria</label>
							<select class="form-control" name="category_id" @error('category_id') is-invalid @enderror>
								<option value="">Seleziona una categoria</option>
								@foreach ($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>	
								@endforeach
							</select>
							@error('category_id')
								<div class="alert alert-danger">{{$message}}</div>
							@enderror
						</div>
						<button type="submit" class="btn btn-primary">Crea</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection