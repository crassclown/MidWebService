<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllBooks()
    {
        return response()->json(Book::all());
    }

    public function showOneBook($id)
    {
        return response()->json(Book::find($id));
    }

    public function create(Request $request)
    {
        $Book = Book::create($request->all());

        return response()->json($Book, 201);
    }

    public function update($id, Request $request)
    {
        $Book = Book::findOrFail($id);
        $Book->update($request->all());

        return response()->json($Book, 200);
    }

    public function delete($id)
    {
        Book::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
