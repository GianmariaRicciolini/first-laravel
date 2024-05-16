<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Visualizzazione dell'elenco delle attività
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }
}
