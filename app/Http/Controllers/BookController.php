<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrow;

class BookController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->query('search');

        if ($search) {
            $books = Book::select('id', 'title', 'author')->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%')
                            ->orWhere('author', 'like', '%' . $search . '%');
            })->paginate(100);
        } else {
            $books = Book::select('id', 'title', 'author')->paginate(100);
        }

        $books->map(function ($book) {
            $latestBorrowing = Borrow::where('book_id', $book->id)
                ->latest()  // Get the latest borrowing record
                ->first();
    
            $book->status = $latestBorrowing ? $latestBorrowing->status : 'Available';
            
            return $book;
        });

        return view('admin.index', compact('books'));
    }

    // Method to store a new book
    public function store(Request $request)
    {
        try {
            $title = $request->input('title');
            $author = $request->input('author');
            $code = $request->input('code');
            $barcode = $request->input('barcode');
            $publicationYear = $request->input('publication_year');
            $description = $request->input('description');
        
            // Create and save the new book
            $book = new Book;
            $book->title = $title;
            $book->author = $author;
            $book->code = $code;
            $book->barcode = $barcode;
            $book->publication_year = $publicationYear;
            $book->description = $description;
            
            $book->save();
            
            return response()->json([
                'message' => 'Book added successfully!',
                'book' => $book
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'requestawdaw' => $request
            ], 422);
        }
    }

    public function getdata(Request $request)
    {
        try {
            $id = $request->query('id');
            $book = Book::findOrFail($id);
            return response()->json($book);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 422);
        }
    }

    public function edit(Request $request)
    {
        try {
            // Get the book by ID
            $book = Book::findOrFail($request->input('id'));

            // Update the book's fields
            $book->title = $request->input('title');
            $book->author = $request->input('author');
            $book->code = $request->input('code');
            $book->barcode = $request->input('barcode');
            $book->publication_year = $request->input('publication_year');
            $book->description = $request->input('description');

            // Save the updated book
            $book->save();

            return response()->json([
                'message' => 'Book updated successfully!',
                'book' => $book
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 422);
        }
    }
    
    public function destroy(Request $request)
    {
        try {
            $id = $request->query('id');
            $book = Book::findOrFail($id);
            $book->delete();
    
            return response()->json(['message' => 'Book deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete the book.'], 500);
        }
    }
    
}
