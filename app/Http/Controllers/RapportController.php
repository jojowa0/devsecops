<?php

namespace App\Http\Controllers;
use App\Models\consultation;
use App\views\report;
use Illuminate\Http\Request;


class RapportController extends Controller
{
    //
    public function index()
    {
        //
        return view('report.index');
    }

    

public function _construct(){

$this->middleware("auth");



}

public function generate(Request $request){

//validation

$this->validate($request,[

"from"=>"required",
"to"=>"required",
'Nom_docteur'=>"required"

]);

//get data

$startDate = date("Y-m-d H:i:s",strtotime($request->from."00:00:00"));
$endDate = date("Y-m-d H:i:s",strtotime($request->to."23:59:59"));
$nom = $request->Nom_docteur;
$consultation = consultation::whereBetween('created_at', [$startDate,$endDate])->get();

//return Data

return view('report.index')->with([
    "startDate"=>date("Y-m-d H:i:s",strtotime($request->from."00:00:00")),
    "endDate"=>date("Y-m-d H:i:s",strtotime($request->to."23:59:59")),
    "consultations"=>consultation::whereBetween('created_at', [$startDate,$endDate])->where('Nom_complet_docteur','like','%'.$nom.'%')
    ->get()

]);


}
}
