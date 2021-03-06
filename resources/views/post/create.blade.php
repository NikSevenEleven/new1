@extends('layouts.main')


@section('content')
    <form class="row g-3" action="{{route('post.store')}}" method="post">
        @csrf
        <div class="col-md-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="col-12">
            <label for="Content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="Content" placeholder="Content"></textarea>
        </div>
        <div class="col-12">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image">
        </div>
        <div class="col-1">
        <button type="submit" class="btn btn-primary">create</button>
        </div>
    </form>
    <div>
        <a href="{{route('post.index')}}" class="btn btn-primary mt-1">back</a>
    </div>
@endsection
