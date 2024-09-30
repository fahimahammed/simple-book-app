@extends('layout')
@section('page-content')
    <a href="{{route('books.index')}}"><-Back</a>
    <h2>Book Details - {{$book->id}}</h2>
    <table class="table">
        <tr>
            <th>Tilte</th>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{$book->stock}}</td>
        </tr>
    </table>
@endsection