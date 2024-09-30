@extends('layout')

@section('page-content')

<div>
    <a href="{{ route('books.index') }}"><-Back</a>
    <h1>Edit Book</h1>
    <form method="POST" action="{{ route('books.update', $book->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $book->author) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" class="form-control" id="stock" name="stock" value="{{ old('stock', $book->stock) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $book->price) }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
