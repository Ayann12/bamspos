<?php

namespace App\Http\Controllers;

use App\Models\Kategory;
use Illuminate\Http\Request;

class KategoryController extends Controller
{
    public function index()
    {
        $kategory = Kategory::all();
        return view('Kategory.index', compact('kategory'));
    }
}
