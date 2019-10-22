@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">
        Add a Category
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="inputCategory">Category Name</label>
                    <input type="text" class="form-control" id="inputCategory" placeholder="Category (i.e. Sports, Technology, Entertainment)">
                </div>
                {{--  <div class="form-group">
                    <label for="inputCategoryDescription">Address 2</label>
                    <input type="textarea" class="form-control" id="inputACateboryDescription" placeholder="This is a category for everything sports like baseball, football,soccer.">
                </div>  --}}
                <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
</div>

@endsection
