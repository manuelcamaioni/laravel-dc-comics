<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }

    public function show($id){
        $comic = Comic::findOrFail($id);
        return view('comic', compact('comic'));
    }
}
