<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{

    public function index(){
        $books = Book::all(); // Fetch all books from the database
        return view('books.index', compact('books'));
    }
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'published_at' => 'nullable|date',
            'price' => 'required|numeric|min:0',
        ]);

        Book::create($request->all());

        return redirect()->route('books.create')->with('success', 'Book added successfully!');
    }
}
