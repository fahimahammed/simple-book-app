@extends('layout')

@section('page-content')
    <h1>Book List</h1>
    <p class="text-end">
        <a class="btn btn-primary" href="{{route('books.create')}}">Add Book</a>
    </p>
    <table class="table table-striped table-border">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Stock</th>
            {{-- <th>CreatedAt</th>
            <th>UpdatedAt</th> --}}
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->stock}}</td>
            {{-- <td>{{$book->created_at}}</td>
            <td>{{$book->updated_at}}</td> --}}
            <td>
                <a href="{{route('books.show', $book->id)}}">view</a>
                <a href="{{route('books.edit', $book->id)}}">edit</a>
                <form method="post" action="{{ route('books.destroy', $book->id) }}" onsubmit="return confirm('Are you sure you want to delete this book?')" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>
    {{$books->links()}}
    @endsection
