<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = DB::table("books")->paginate(10);
        return view('library.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('library.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => ['required', 'max:100'],
            'name' => ['required', 'unique:books', 'max:255'],
            'genre' => ['required'],
            'language' => ['required'],
            'year' => ['required'],
        ]);

        $book = new Book();
        $book->author = $request->input('author');
        $book->name = $request->input('name');
        $book->genre  = $request->input('genre');
        $book->language = $request->input('language');
        $book->year = $request->input('year');
        $book->save();
        return redirect('/library');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('library.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'author' => ['required', 'max:100'],
            'name' => ['required', 'max:255'],
            'genre' => ['required'],
            'language' => ['required'],
            'year' => ['required'],
        ]);
        $book->update($request->all());
        return redirect('/library');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/library');
    }
}
