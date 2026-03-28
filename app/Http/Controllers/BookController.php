<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $books = Book::where('status', 0)->get();
          return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    Book::create($request->all());
    return redirect()->back();
}

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, $id)
  {
    $book = Book::findOrFail($id);
    $book->update($request->all());

    return redirect()->route('books.index');
   }

    /**
     * Remove the specified resource from storage.
     */
  public function destroy($id)
  {
    $book = Book::findOrFail($id);
    $book->status = 1;
    $book->save();

    return redirect()->back();
}
}
