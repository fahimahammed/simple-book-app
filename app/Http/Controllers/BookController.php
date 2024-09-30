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

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $message = [
            'stock.gte' => 'The stock must be greater than or equal to 0',
        ];
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|size:13',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ], $message);

        // Create the book using the validated data
        $book = Book::create($validatedData);

        // $book = new Book();
        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->isbn = $request->isbn;
        // $book->price = $request->price;
        // $book->stock = $request->stock;
        // $book->save();

        return redirect()->route('books.show', $book->id);
    }
}
