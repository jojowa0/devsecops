<?php

namespace App\Http\Controllers;

use App\Models\specialite;
use App\Http\Requests\StorespecialiteRequest;
use App\Http\Requests\UpdatespecialiteRequest;
use App\views\specialites;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('specialites.index',[
            'specialites'=>specialite::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('specialites.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorespecialiteRequest $request)
    {
        //
        $this->validate($request, [
            'id' => 'required|unique',
            'Nom_specialite' => 'required',
            'Nom_Docteur' => 'required',
            
        ]);
    
           $specialite = new specialite();
           $specialite->id = request('id');
           $specialite->Nom_specialite = request('Nom_specialite');
           $specialite->Nom_Docteur = request('Nom_Docteur');
           $specialite->save();
           return redierct()->route('specialite.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(specialite $id)
    {
        //
        $id = specialite::find(request('id'));
        return view('specialites.show',[

            'specialites'=>$id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(specialite $specialite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatespecialiteRequest $request, specialite $id)
    {
        //
        return view('specialites.update', compact('id'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(specialite $specialite)
    {
        //
    }

    public function update_traitement(UpdatespecialiteRequest $request){

        $this->validate($request, [
            'id' => 'required|unique',
            'Nom_specialite' => 'required',
            'Nom_Docteur' => 'required',
            
        ]);
    
           $specialite = specialite::find(request('id'));
           $specialite->id = request('id');
           $specialite->Nom_specialite = request('Nom_specialite');
           $specialite->Nom_Docteur = request('Nom_Docteur');
           $specialite->update();
           return redierct()->route('specialite.index');
    
       }
    
    
       public function delete_traitement($id){
    
    
        $specialite = specialite::find(request('id'));
        $specialite->delete();
          return redirect('/specialite');
    
    
       }

}
