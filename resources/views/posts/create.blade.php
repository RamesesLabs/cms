@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
    {{ isset($post)  ? 'Edit Post' : 'Create post' }}
    </div>
  <div class="card-body">
    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="list-group">
          @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
              {{ $error }}
            </li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST">
      @csrf
      @if(isset($post))
        @method('PUT')
      @endif
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" value="{{ isset($post) ? $post->name : ''}}">
      </div>
      <div class="form-group">
        <button class="btn btn-success">{{ isset($post) ? 'Update Post': 'Add Post' }}</button>
      </div>
    </form>
  </div>
</div>
@endsection
