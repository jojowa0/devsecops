<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialiteController;
use App\Models\specialite;
use App\views\specialites;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RapportController;
use App\Models\Doctor;
use App\views\doctors;
use App\Http\Controllers\ConsultationController;
use App\Models\consultation;
use App\views\consultations;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('specialite', SpecialiteController::class);
Route::post('/create',function(){
      
    $specialite = new specialite();
    $specialite->id = request('id');
    $specialite->Nom_specialite = request('Nom_specialite');
    $specialite->Nom_Docteur = request('Nom_Docteur');
    $specialite->save();
    return redirect('/specialite');


});

Route::resource('docteur', DoctorController::class);
Route::post('/create2',function(){
      
    $doctor = new Doctor();
           $doctor->id = request('id');
           $doctor->Nom_complet = request('Nom_complet');
           $doctor->Nom_specialite = request('Nom_specialite');
           $doctor->save();
    return redirect('/docteur');


});

Route::resource('consultation', ConsultationController::class);
Route::post('/create3',function(){
      
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
        return redirect('/consultation');


});



Route::post('/update/traitement',function (){
      
    $specialite = specialite::find(request('id'));
           $specialite->id = request('id');
           $specialite->Nom_specialite = request('Nom_specialite');
           $specialite->Nom_Docteur = request('Nom_Docteur');
           $specialite->update();
           return redirect('/specialite');


});
Route::post('/update2/traitement',function (){
      
    $doctor = Doctor::find(request('id'));
           $doctor->id = request('id');
           $doctor->Nom_complet = request('Nom_complet');
           $doctor->Nom_specialite = request('Nom_specialite');
           $doctor->update();
           return redirect('/docteur');


});

Route::post('/update3/traitement',function (){
      
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
        return redirect('/consultation');



});

Route::get('/consultation', [ConsultationController::class, 'index']);
Route::get('/specialite', [SpecialiteController::class, 'index']);
Route::get('/docteur', [DoctorController::class, 'index']);
Route::get('/show/{id}', [SpecialiteController::class, 'show']);
Route::get('/update/{id}', [SpecialiteController::class, 'update']);
Route::get('/update/traitement', [SpecialiteController::class, 'update_traitement']);
Route::get('/delete/{id}', [SpecialiteController::class, 'delete_traitement']);
Route::get('/show2/{id}', [DoctorController::class, 'show']);
Route::get('/update2/{id}', [DoctorController::class, 'update']);
Route::get('/delete2/{id}', [DoctorController::class, 'delete_traitement']);
Route::get('/update2/traitement', [DoctorController::class, 'update2_traitement']);
Route::get('/show3/{id}', [ConsultationController::class, 'show']);
Route::get('/update3/{id}', [ConsultationController::class, 'update']);
Route::get('/update3/traitement', [ConsultationController::class, 'update3_traitement']);
Route::get('/delete3/{id}', [ConsultationController::class, 'delete_traitement']);
Route::get('/report/generate', [RapportController::class, 'generate']);
Route::get('/reports', [RapportController::class, 'index']);


