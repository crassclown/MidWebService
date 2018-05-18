<?php

namespace App\Http\Controllers;

use App\Category;
use App\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
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

    public function showAllCategories()
    {
        return response()->json(Category::with('books')->get());
    }

    public function categoryHasBooks($id)
    {
        return response()->json(Book::where('category_id',$id)->get());
    }

    public function categoryHasOneBook($id, $bookid)
    {
        return response()->json(Book::where('id', $bookid)->where('category_id', $id)->get());
    }

    public function create(Request $request)
    {
        $Category = Category::create($request->all());

        return response()->json($Category, 201);
    }

    public function update($id, Request $request)
    {
        $Category = Category::findOrFail($id);
        $Category->update($request->all());

        return response()->json($Category, 200);
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
