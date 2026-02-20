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
                    <form action="/modifier_materiel" method="POST">
                        @csrf
                        
                     <h1 class="text-primary text-center" style="font-size: 35px">Modifier un matériel</h1>

                    <table class="table mt-2 w-full   table-hover table-bordered table-hover text-center align-middle table-striped">
    <tbody class="">
        <tr>
            <input type="hidden" name="id_materiel" value="{{ $materiels->id_materiel }}">
            <td class="px-4 py-2 border">Type</td>
            <td><input type="text" class="form-control" name="type" value="{{ $materiels->type }}" required></td>
        </tr>
        <tr> 
            <td class="px-4 py-2 border">Marque</td>
            <td><input type="text" class="form-control" name="marque" value="{{ $materiels->marque }}"  required></td>  
        </tr>
        <tr> 
            <td class="px-4 py-2 border">Etat</td>
            <td><input type="text" class="form-control" name="etat" value="{{ $materiels->etat }}" required></td>  
        </tr>
        <tr>
            <td class="px-4 py-2 border">Configuration</td>
            <td><input type="text" class="form-control" name="configuration" value="{{ $materiels->configuration }}" required></td>  
        </tr>
        <tr>
            <td class="px-4 py-2 border">Description</td>
            <td><input type="text" class="form-control" name="description" value="{{ $materiels->description }}" required></td>  
        </tr>
  
    </tbody>
   <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i> Modifier</button>
</table>

</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
