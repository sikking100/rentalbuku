<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class AllController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('guest.all', compact('books'));
    }
}
