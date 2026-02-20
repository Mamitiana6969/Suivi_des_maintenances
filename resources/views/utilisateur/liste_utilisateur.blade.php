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
                
                <div class="p-6 ">
                    <h1 class="text-center text-primary" style="font-size: 30px">Utilisateurs</h1>
                   <a href="ajouter_utilisateur"> <button class="btn btn-primary mb-1"><i class="fas fa-plus"></i> Ajouter un utilisateur</button></a>
                   
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
            <th class="px-4 py-2 border">Non</th>
            <th class="px-4 py-2 border">Prénom</th>
            <th class="px-4 py-2 border">Email</th>
            <th class="px-4 py-2 border">Téléphone</th>
            <th class="px-4 py-2 border">Action</th>
        </tr>
        
    </thead>
    <tbody>
         @foreach($utilisateurs as $ut)
            <tr>
                <td class="px-4 py-2 border">{{ $ut->nom }}</td>
                <td class="px-4 py-2 border">{{ $ut->prenom }}</td>
                <td class="px-4 py-2 border">{{ $ut->email }}</td>
                <td class="px-4 py-2 border">{{ $ut->telephone }}</td>
                <td class="px-4 py-2 border">
                    
                        <a href="modifier_utilisateur/{{$ut->id_utilisateur}}"><button type="submit" class="btn btn-primary"> <i class="fas fa-edit"></i> Modifier</button></a>
                  
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
