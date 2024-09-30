<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Book List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Price</th>
            <th>Stock</th>
            <th>CreatedAt</th>
            <th>UpdatedAt</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->stock}}</td>
                <td>{{$book->created_at}}</td>
                <td>{{$book->updated_at}}</td>
                <td><a href="{{route('books.show', $book->id)}}">view</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>