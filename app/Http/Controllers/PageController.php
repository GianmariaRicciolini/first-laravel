<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Visualizzazione dell'elenco delle attività
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
