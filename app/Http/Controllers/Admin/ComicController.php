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

    public function create(){
        return view('admin.create');
    }
    public function store(Request $request){
            $data = $request->all();
            $newComic = new Comic();

            $newComic->title = $data['title'];
            $newComic->description = $data['description'];
            $newComic->thumb = $data['thumb'];
            $newComic->price = $data['price'];
            $newComic->series = $data['series'];
            $newComic->sale_date = $data['sale_date'];
            $newComic->type = $data['type'];
            $newComic->artists = $data['artists'];
            $newComic->writers = $data['writers'];

            $newComic->save();
            return redirect()->route('singleComic', $newComic->id);
    }
}
