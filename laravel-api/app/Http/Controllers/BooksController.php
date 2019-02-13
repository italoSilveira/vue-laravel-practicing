<?php
use App\Company;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = \App\Book::all();
        return response()->json($books);
    }

    public function store(Request $request)
    {
    	$book = new \App\Book();

        $book->name = $request->name;
        $book->synopsis = $request->synopsis;
        $book->pages = $request->pages;
        $book->isbn = $request->isbn;
        $book->path = $request->path;
        $book->save();

        return response()->json($book);
    }

    public function update (Request $request, \App\Book $book){
        $book->name = $request->name;
        $book->synopsis = $request->synopsis;
        $book->pages = $request->pages;
        $book->isbn = $request->isbn;
        $book->path = $request->path;
        $book->save();

        return response()->json($book);
    }

    public function show (\App\Book $book){
    	return response()->json($book);
    }

}