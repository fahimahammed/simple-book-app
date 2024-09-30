@extends('layout')

@section('page-content')

<div>
    <a href="{{route('books.index')}}"><-Back</a>
    <h1>Create Book</h1>
        <form method="POST" action="{{route('books.store')}}">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                <div class="text-danger">{{$errors->first('title')}}</div>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}">
                <div class="text-danger">{{$errors->first('author')}}</div>
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn')}}">
                <div class="text-danger">{{$errors->first('isbn')}}</div>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock" value="{{old('stock')}}">
                <div class="text-danger">{{$errors->first('stock')}}</div>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                <div class="text-danger">{{$errors->first('price')}}</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection