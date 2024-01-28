<style>
  nav a{
       
    padding:.5rem;

  }


</style>


<div>
<div class="relative py-4 px-6">
    <nav>
        
                   <a href="/home">Home</a>
            
                   <a href="/specialite">Specialité</a>
            
                   <a href="/reports">Rapports</a>
              
                   <a href="/docteur/create">Crée_Docteur</a>
            
    </nav>

       </div>
@extends('layout3')
@section('content')
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border: style 1px solid">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 pb-40">
            <tr>
                <th scope="col" class="px-6 py-3">
                id
                </th>
                <th scope="col" class="px-6 py-3">
                Nom_Complet
                </th>
                <th scope="col" class="px-6 py-3">
               
                Nom_Spécialité
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Modify
                </th>

                <th scope="col" class="px-6 py-3">
                    Delete
                </th>

            </tr>
        </thead>
        <tbody>
        @if(count($doctors)>0)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @foreach($doctors as $doctor)
        
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="/show2/{{$doctor['id']}}">
                {{$doctor['id']}}
                </a>
                </th>
                <td scope="row" class="px-6 py-4">
                {{$doctor['Nom_complet']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$doctor['Nom_specialite']}}
                </td>
                
                    <td scope="row" class="px-6 py-4">
                     <a href="/update2/{{$doctor['id']}}">
                    
                     Update
     
                     </a>
                     </td>
                     <td scope="row" class="px-6 py-4">
                     <a href="/delete2/{{$doctor['id']}}">

                     Delete

                     </a>
                     </td>

                
            
            </tr>
           
            @endforeach
        </tbody>
        @endif
    </table>
</div>

@endsection('content')
@section('title', 'Docteurs')