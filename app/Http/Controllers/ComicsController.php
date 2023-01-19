<?php

namespace App\Http\Controllers;


use App\Models\Comic;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class ComicsController extends Controller
{
    public function show($id){
        $id = $id + 1;
        $single_comic_info = Comic::findOrFail($id);
        return view('comics', compact('single_comic_info'));
    }

    public function create(){
        return view('CRUD.create');
    }


    public function store(Request $request){
        $data = $request->all();
        $new_record = new Comic();
        $new_record -> fill($data);
        $new_record->save();

        $comics_info = Comic::all();
        return view('home', compact('comics_info'));
    }

}
