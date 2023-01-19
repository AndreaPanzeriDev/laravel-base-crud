<?php

namespace App\Http\Controllers;



use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
    $comics_info = Comic::all();
    return view('home', compact('comics_info'));
   }
}
