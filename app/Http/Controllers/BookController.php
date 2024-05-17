<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index');
    }

    public function create()
    {
        return view('book.create');
    }

    public function show()
    {
        return view('book.show');
    }

    public function edit()
    {
        return view('book.edit');
    }
}
