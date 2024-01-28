@extends('layout3')

@section('content')
        <div class="mt-16">
                <h3>this is a page of create spécialités</h3>
        </div>
        <div>
            <form action="/create" method="POST" class="form bg-white p-6 border-2 solid black">
                @csrf
                <div>           
                        <label for="id" class=" block text-gray-700 text-sm font-bold mb-2">id</label><br>
                        <input type="number" class="text-lg border-1  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="id">
                
                        
                
                </div>

                <div>    
                        <br><label for="name" class="text-sm">Spécialité_nom</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Nom_specialite">
                
                </div>

                <div>
                        <br><label for="quantite" class="text-sm">Docteur_nom</label><br>
                        <input type="text" class="text-lg border-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="Nom_Docteur">
                
                
                
                
                </div>

                

                <div>
                        <br><button type="submit">Ajouter</button>
                </div>

            </form>
        </div>

@endsection('content')
@section('title', 'Create Spécialités')