<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // $books = Book::all();
        $books = Book::paginate(10);

        return view('books.index')->with('books', $books);
    }

    public function show($bookId)
    {
        $book = Book::find($bookId);
        return view('books.show')->with('book', $book);
    }
}
