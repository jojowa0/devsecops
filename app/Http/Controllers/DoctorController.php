<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\views\doctors;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('doctors.index2',[
            'doctors'=>Doctor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('doctors.create2');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        //
        $this->validate($request, [
            'id' => 'required|unique',
            'Nom_complet' => 'required',
            'Nom_specialite' => 'required',
            
        ]);
    
           $doctor = new Doctor();
           $doctor->id = request('id');
           $doctor->Nom_complet = request('Nom_complet');
           $doctor->Nom_specialite = request('Nom_specialite');
           $doctor->save();
           return redierct()->route('docteur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(UpdateDoctorRequest $request,Doctor $id)
    {
        //

$doctor = Doctor::find(request('id'));
           $doctor->id = request('id');
           $doctor->Nom_complet = request('Nom_complet');
           $doctor->Nom_specialite = request('Nom_specialite');
           return view('doctors.show2',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $id)
    {
        //
        return view('doctors.update2', compact('id'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

    public function update2_traitement(UpdateDoctorRequest $request){

        $this->validate($request, [
            'id' => 'required|unique',
            'Nom_complet' => 'required',
            'Nom_specialite' => 'required',
            
        ]);
    
           $doctor = Doctor::find(request('id'));
           $doctor->id = request('id');
           $doctor->Nom_complet = request('Nom_complet');
           $doctor->Nom_specialite = request('Nom_specialite');
           $doctor->update();
           return redirect()->route('docteur.index');
       }
    
    
       public function delete_traitement($id){
    
    
        $doctor = Doctor::find(request('id'));
        $doctor->delete();
        return redirect('/docteur');
    
    
       }

}
