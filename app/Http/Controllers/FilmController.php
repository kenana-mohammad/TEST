<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\Actor;
use App\Models\type;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\filmRequest;
use App\Http\Requests\updatefilm;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          $films=film::get();
          return view('backend.dashborad.films.index',compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $film = film::get();
        $alltypes = type::get();
        return view('backend.dashborad.films.create',compact('film','alltypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(filmRequest $request)
    {
        //
   //film validate
   $request->validated();
   //قيمة بدائية
            $path = null;
          $description = null; 
           $show_time =null;
           //check image 
            if ($request->hasFile('image')) {
    $extension = $request->file('image')->getClientOriginalExtension();
    $filename = Str::random(20).'.'.$extension;
    $path = $request->file('image')->storeAs('film', $filename, 'public');
    $image = $path;
}
 // check
    $show_time = $request->input('time') != null ? $request->input('time') : null ;
    $description = $request->input('description') != null ? $request->input('description') : null ;
    $image = $request->input('image') != null ? $path  : null ;

         $film = film::create([
         'name' => $request->name,
         'show_time' =>$show_time,
         'description' => $description,
         'image' => $image,
]);

// save to film-type
$types = Type::all();

             if ($types->count() > 0) {
         $film->types()->attach($request->Type_id);
               }
          else {
      $type = "null";
        }

            return redirect()->route('film.index')->with('add', 'done');
         
         //type
        
        }
  //getTypes
          public function getTypes($id){
              $film= film::find($id);
                $types = $film->types;
                return view('backend.dashborad.films.showtypes',compact('film','types'));
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
    public function edit(int $id)
    {
        //
        $film = film::find($id);
        $types = Type::all();
        return view('backend.dashborad.films.edit',compact('film','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updatefilm $request, int $id)
    {
        //
        $request->validated();
        $film = film::find($id);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = Str::random(20) . '.' . $extension;
            $path = $request->file('image')->storeAs('film', $filename, 'public');
        } else {
            $path = $film->image;
        }
        
          $image = $path;
        
        $film->update([
            'name' => $request->name,
            'description' =>  $request->description,
            'show_time' =>  $request->time,
            'image' => $image,
        ]);
        
        $film->types()->sync($request->types_id);
        return redirect()->route('film.index')->with('edit','edit film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $film = Film::find($id);

        if ($film) {
            $types = $film->types;
        
            if ($types) {
                $film->types()->detach();
            }
        
            $film->delete();
        }
        
        return redirect()->back();
    }
  
    //test relation 
    public function film($id){
        $film = film::find($id);
        return $film->actor;
    }
    //test many to many
    
}
