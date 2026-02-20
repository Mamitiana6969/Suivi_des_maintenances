<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/js/all.min.js') }}">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">

    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 "><h1 class="text-center text-primary" style="font-size: 30px">Matériels</h1>
                    <a href="ajouter_materiel"><button class="btn btn-primary mb-1"><i class="fas fa-plus"></i> Ajouter un matériel</button></a>
                    
                     @if (@session('status'))
                         <div class="alert alert-success">
                            {{session('status')}}
                         </div>
                     
                         
                     @endif
                     <ul>
                        @foreach ($errors->all() as $error )
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                     </ul>
                    <table class="table  w-full   table-hover table-bordered table-hover text-center align-middle table-striped">
                      
    <thead class="">

        <tr>
            <th class="px-4 py-2 border">Type</th>
            <th class="px-4 py-2 border">Marque</th>
            <th class="px-4 py-2 border">Etat</th>
            <th class="px-4 py-2 border">Configuration</th>
            <th class="px-4 py-2 border">Déscription</th>
            <th class="px-4 py-2 border">Action</th>
        </tr>
        
    </thead>
    <tbody>
           @foreach($materiels as $mat)
            <tr>
                <td class="px-4 py-2 border">{{ $mat->type }}</td>
                <td class="px-4 py-2 border">{{ $mat->marque }}</td>
                <td class="px-4 py-2 border">{{ $mat->etat }}</td>
                <td class="px-4 py-2 border">{{ $mat->configuration }}</td>
                <td class="px-4 py-2 border">{{ $mat->description }}</td>
                <td class="px-4 py-2 border">
                    
        
                            <a href="modifier_materiel/{{$mat->id_materiel}}"><button type="submit" class="btn btn-primary"> <i class="fas fa-edit"></i> Modifier</button></a>
                  
                </td>
            </tr>
        @endforeach
    </tbody>
       
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
