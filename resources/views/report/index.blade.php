<style>
  nav a{
       
    padding:.5rem;

  }


  h3 {
  font-size: 20px;
  font-weight: 200;
  background-image: linear-gradient(45deg, #553c9a, #ee4b2b);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  
           }



</style>


<div>
    <div class="relative py-4 px-6">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        
    
        
        <a href="/home">Home</a>
 
        <a href="/specialite">Specialité</a>
 
        <a href="/docteur">Docteurs</a>
 

 

            
    </nav>
</div>
@extends('layout3')
@section('content')
<div class="relative overflow-x-auto">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3 shadow mx-auto p-2">
                    <form action="/report/generate" method="GET">
                    @csrf    
                    <div class="form-group">
                    <input type="date" name="from"  class="form-control">
                    <input type="date" name="to"  class="form-control">
                  Nom_Docteur <input type="text" name="Nom_docteur">
                 <button type="submit" class="btn btn-primary">
                    give report
                 </button>

                 </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    @isset($consultations)
    <h3>report from {{$startDate}} to {{$endDate}}</h3>
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
                    
            
            </tr>
           
            @endforeach
        </tbody>
        @endif
    </table>
    @endisset
</div>

@endsection('content')
@section('title', 'Rapports')