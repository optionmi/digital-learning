<?php

namespace App\Http\Controllers\API;

use App\Models\Book;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Http\Resources\BooksResource;
use App\Http\Resources\BookCollection;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return $this->sendAPIResponse(BooksResource::collection($books), 'Books fetched successfully.');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        if ($book) {
            return $this->sendAPIResponse(BookResource::make($book, false), 'Book fetched successfully.');
        }
        return $this->sendAPIError('Book not found.');
    }

    public function getBooksBySubjectId(string $id)
    {
        $books = Book::where('subject_id', $id)->get();
        if ($books->count()) {
            return $this->sendAPIResponse(BooksResource::collection($books), 'Books fetched successfully.');
        }
        return $this->sendAPIError('Books not found.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
