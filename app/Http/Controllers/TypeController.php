<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $type = Type::all();
        return view('backend.dashborad.Type.index' , compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.dashborad.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $type = Type::create([
            'type' =>$request->type,
        ]);

       
        return redirect()->route('type.index')->with('add','done');

    }
        
    

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $type = type::find($id);
        return view('backend.dashborad.type.edit' ,compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
        $type= type::find($id);
        $type->update([
            'type' =>$request->type,
        ]);
        return redirect()->route('type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $type = type::find($id);

        if ($type) {
            $film = $type->Films;
        
            if ($film) {
                $type->Films()->detach();
            }
        
            $type->delete();
            return redirect()->back();


    }
}
}