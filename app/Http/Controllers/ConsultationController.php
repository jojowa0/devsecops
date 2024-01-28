<?php

namespace App\Http\Controllers;
use App\Models\consultation;
use App\Http\Requests\StoreconsultationRequest;
use App\Http\Requests\UpdateconsultationRequest;
use App\views\consultations;
use App\views\doctors;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('consultations.index3',[
            'consultations'=>consultation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('doctors.show2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreconsultationRequest $request)
    {
        //
        $this->validate($request, [
            'id' => 'required|unique',
            'Nom_complet_docteur' => 'required',
            'Nom_specialite' => 'required',
            'ordre'=>'required',
            'date' => 'required',
            'IPP' => 'required',
            'Nom_complet_Pation' => 'required',
            'Type_Paiment' => 'required',
            'TA' => 'required',
            'Type_observation' => 'required',
        ]);
    
        $consultation = new consultation();
        $consultation->id = request('id');
        $consultation->Nom_complet_docteur = request('Nom_complet');
        $consultation->Nom_specialite = request('Nom_specialite');
        $consultation->ordre = request('ordre');
        $consultation->date = request('date');
        $consultation->IPP = request('IPP');
        $consultation->Nom_complet_Pation = request('Nom_complet_Pation');
        $consultation->Type_Paiment = request('Type_Paiment');
        $consultation->TA = request('TA');
        $consultation->Type_observation = request('Type_observation');
        $consultation->save();
        return redierct()->route('consultation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(consultation $id)
    {
        //
        $id = consultation::find(request('id'));
        return view('consultations.show3',[

            'consultations'=>$id
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateconsultationRequest $request, consultation $id)
    {
        //
        return view('consultations.update3', compact('id'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(consultation $consultation)
    {
        //
    }

    public function update3_traitement(UpdatespecialiteRequest $request){

        $this->validate($request, [
            'id' => 'required|unique',
            'Nom_complet_docteur' => 'required',
            'Nom_specialite' => 'required',
            'ordre' =>'requird',
            'date' => 'required',
            'IPP' => 'required',
            'Nom_complet_Pation' => 'required',
            'Type_Paiment' => 'required',
            'TA' => 'required',
            'Type_observation' => 'required',
        ]);
    
        $consultation = consultation::find(request('id'));
        $consultation->id = request('id');
        $consultation->Nom_complet_docteur = request('Nom_complet');
        $consultation->Nom_specialite = request('Nom_specialite');
        $consultation->ordre = request('ordre');
        $consultation->date = request('date');
        $consultation->IPP = request('IPP');
        $consultation->Nom_complet_Pation = request('Nom_complet_Pation');
        $consultation->Type_Paiment = request('Type_Paiment');
        $consultation->TA = request('TA');
        $consultation->Type_observation = request('Type_observation');
        $consultation->update();
        return redirect()->route('consultation.index');

    
       }
    
    
       public function delete_traitement($id){
    
    
        $consultation = consultation::find(request('id'));
        $consultation->delete();
          return redirect('/consultation');
    
    
       }

}
