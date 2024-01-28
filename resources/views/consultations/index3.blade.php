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
            
                   <a href="/docteur">Docteurs</a>
            
                   <a href="/reports">Rapports</a>
              
            
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
                Nom_docteur
                </th>
                <th scope="col" class="px-6 py-3">
               
                Nom_Spécialité

                </th>
                <th scope="col" class="px-6 py-3">
               
                Ordre

                </th>

                <th scope="col" class="px-6 py-3">
               
                date

                </th>
                <th scope="col" class="px-6 py-3">
               
                IPP

                </th>
                <th scope="col" class="px-6 py-3">
               
                Nom_complet_Pation

                </th>
                <th scope="col" class="px-6 py-3">
               
                Type_Paiment

                </th>
                <th scope="col" class="px-6 py-3">
               
                TA
                </th>
                <th scope="col" class="px-6 py-3">
               
                Type_observation

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
        @if(count($consultations)>0)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @foreach($consultations as $consultation)
        
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="/show3/{{$consultation['id']}}">
                {{$consultation['id']}}
                </a>
                </th>
                <td scope="row" class="px-6 py-4">
                {{$consultation['Nom_complet_docteur']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['Nom_specialite']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['ordre']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['date']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['IPP']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['Nom_complet_Pation']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['Type_Paiment']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['TA']}}
                </td>
                <td scope="row" class="px-6 py-4">
                {{$consultation['Type_observation']}}
                </td>
                    <td scope="row" class="px-6 py-4">
                     <a href="/update3/{{$consultation['id']}}">
                    
                     Update
     
                     </a>
                     </td>
                     <td scope="row" class="px-6 py-4">
                     <a href="/delete3/{{$consultation['id']}}">

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
@section('title', 'Consultations')