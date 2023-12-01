<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\Actor;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          $film=film::get();
          return view('backend.dashborad.films.index',compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.dashborad.films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $film = new film();

        $film->name = $request->input('name');
        $film->show_time = $request->input('time');
        $film->description = $request->input('description');
        
        if($request-> hasFile('image')){
            $filename=time().'.'.$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('film',$filename,'public');
            $film->image = $path;
        }
         $film->save();
         return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(film $film)
    {
        //
    }


    //test relation 
    public function film($id){
        $film = film::find($id);
        return $film->actor;
    }
    //test many to many
     public function getFilm($id){
     $film= film::find($id);
       return $film->type;
     }
}
