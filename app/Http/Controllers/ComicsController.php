<?php

namespace App\Http\Controllers;


use App\Models\Comic;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class ComicsController extends Controller
{
    public function show($id){
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

    public function destroy($id){
        $comicTD = Comic::findOrFail($id);
        $comicTD -> delete();

        return redirect()->route('home');
    }


    public function edit($id){
        $comicTD = Comic::findOrFail($id);
        return view('CRUD.edit', compact('comicTD'));
    }

    public function update(Request $request, $id){
        $info = $request->all();
        $comicC = Comic::findOrFail($id);
        $comicC -> update($info);

        return redirect()->route('home');
    }

}
