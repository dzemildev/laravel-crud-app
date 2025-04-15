<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\books;

class booksController extends Controller
{
    public function index(){
        

        $books = books::all();
        return view('books.index', ['books' => $books]);

    }
    public function create(){
        return view('books.create');
    }
        
    public function store(Request $request){
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'author_name' => 'required|string|max:255',
                'author_lname' => 'required|string|max:255',
                'year' => 'required|numeric|min:1900|max:2100',
   
            ]);
            $newBook = books::create($data);
            return redirect()->route('books.index')->with('success', 'Book created successfully!');
        }
        public function edit(books $books){
    
        return view('books.edit', ['books' => $books]);

        }
        public function update(books $books, Request $request){
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'author_name' => 'required|string|max:255',
                'author_lname' => 'required|string|max:255',
                'year' => 'required|numeric|min:1900|max:2100',
            ]);
            $books->update($data);
            return redirect()->route('books.index')->with('success', 'Book updated successfully!');
           
        }
        public function delete(books $books){
            $books->delete();
            return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
        }
        public function show($id)
        {
    $books = Books::findOrFail($id); 
    return view('books.show', compact('books')); 
        }
    }