@extends('layouts.app');

@section('content')

<div class="card card-default">
    <div class="d-flex justify-content-end">
        <a href="{{ route('categories.create') }}" class="btn btn-info">Add Category</a>
    </div>
    <div class="card-header">
        Categories
    </div>
</div>

@endsection
