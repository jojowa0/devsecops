
<style>
  nav a{
       
    padding:.5rem;

  }


</style>
<div class="relative py-4 px-6">
    <nav>
        
                   <a href="#">Home</a>
            
                   <a href="#">Specialité</a>
            
                   <a href="#">Docteurs</a>
            
                   <a href="#">Rapports</a>
              
            
    </nav>

       </div>
@extends('layout3')

@section('content')
        <div class="mt-16">
                <h3>this is a page of edit Consultations</h3>
        </div>
        <div>
            <form action="/update3/traitement" method="POST" class="form bg-white p-6 border-2 solid black">
                @csrf
                <div>           
                        <label for="id" class=" block text-gray-700 text-sm font-bold mb-2">id</label><br>
                        <input type="number" class="text-lg border-1  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="id" value="{{$id['id']}}">
                
                        
                
                </div>

                <div>    
                        <br><label for="Nom_complet" class="text-sm">Nom_complet_docteur</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Nom_complet_docteur" value="{{$id['Nom_complet']}}">
                
                </div>

                <div>
                        <br><label for="Nom_specialite" class="text-sm">Nom_Spécialité</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Nom_specialite" value="{{$id['Nom_specialite']}}">
                
                
                </div>
                <div>
                        <br><label for="ordre" class="text-sm">Ordre</label><br>
                        <input type="number" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ordre" value="{{$id['ordre']}}">
                
                
                </div>

                <div>
                        <br><label for="date" class="text-sm">Date</label><br>
                        <input type="date" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="date" value="{{$id['date']}}">
                
                
                </div>



                <div>
                        <br><label for="Nom_complet_Pation" class="text-sm">Nom_Complet_Pation</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Nom_complet_Pation" value="{{$id['Nom_complet_Pation']}}">
                
                </div>

                <div>
                        <br><label for="IPP" class="text-sm">IPP</label><br>
                        <input type="number" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="IPP" value="{{$id['IPP']}}">
                
                </div>

                <div>
                        <br><label for="TP" class="text-sm">Type_Paiment</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Type_Paiment" value="{{$id['Type_Paiment']}}">
                
                </div>

                <div>
                        <br><label for="TA" class="text-sm">TA</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="TA" value="{{$id['TA']}}">
                
                </div>

                <div>
                        <br><label for="Type_observation" class="text-sm">Type_observation</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Type_observation" value="{{$id['Type_observation']}}">
                
                </div>

                <div>
                        <br><button type="submit">Edit</button>
                </div>

            </form>
        </div>

@endsection('content')
@section('title', ' Edit Consultations')