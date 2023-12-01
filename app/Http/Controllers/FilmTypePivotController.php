<?php

namespace App\Http\Controllers;

use App\Models\film_type_pivot;
use App\Models\Type;
use App\Models\film;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class FilmTypePivotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Typefilm=film_type_pivot::get();
    return view('backend.dashborad.film_type.index' ,compact('Typefilm'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $film =film::select('id' , 'name')->get();
        $type = Type::select('id','type')->get();
        return view('backend.dashborad.film_type.create',compact('film','type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'film_id' => 'required | max:191',
           
             'type' => 'nullable|string',
        
        
        
          ],
         
      
      );
      
        if($validator->fails()){
          return $validator->errors();
        }
      else{  
        $film = film::find($request->film_id);
        
         $film->type()->attach($request->Type_id);
         return redirect()->route('film_Type.index');
      }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(film_type_pivot $film_type_pivot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(film_type_pivot $film_type_pivot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, film_type_pivot $film_type_pivot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(film_type_pivot $film_type_pivot)
    {
        //
    }
}
