<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;
class FrontendController extends Controller
{
    //
    public function index(){
     $films = film::all();
        return view('welcome',compact('films'));
    }
    //showdetails
    public function show($id){
        $film = film::find($id);
        return view('frontend.show',compact('film'));
    }
}
