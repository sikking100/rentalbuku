<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class BerandaController extends Controller
{
    public function index()
    {
        $bestbook = Book::inRandomOrder()->limit(6)->get();
        $new = Book::orderBy('id', 'Asc')->take(3)->get();
        $newauthor = Book::orderBy('id', 'Desc')->take(3)->get();
        return view('guest.beranda', compact('bestbook', 'new', 'newauthor'));
    }
}
