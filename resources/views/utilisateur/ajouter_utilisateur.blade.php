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
                    <form action="/ajouter_utilisateur" method="POST">
                        @csrf
                     <h1 class="text-primary text-center" style="font-size: 35px">Nouveau utilisateur</h1>

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
                    <table class="table mt-2 w-full   table-hover table-bordered table-hover text-center align-middle table-striped">
    <tbody class="">
        <tr>
            <td class="px-4 py-2 border">Nom</td>
            <td><input type="text" class="form-control" name="nom" required></td>
        </tr>
        <tr> 
            <td class="px-4 py-2 border">Prénom</td>
            <td><input type="text" class="form-control" name="prenom" required></td>  
        </tr>
        <tr> 
            <td class="px-4 py-2 border">Email</td>
            <td><input type="mail" class="form-control" name="email" required></td>  
        </tr>
        <tr>
            <td class="px-4 py-2 border">Téléphone</td>
            <td><input type="number" class="form-control" name="telephone" required></td>  
        </tr>
  
    </tbody>
   <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Enregistrer</button>
</table>

</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
