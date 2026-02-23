<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;
class MaterielController extends Controller
{
    //
    public function liste_materiel()
    {
        $materiels = Materiel::all();
        return view ('materiel.liste_materiel', compact('materiels'));
    }
     public function ajouter_materiel()
    {
        return view ('materiel.ajouter_materiel');
    }
    public function modifier_materiel($id_materiel)
    {
    $materiels = Materiel::find($id_materiel);
    return view ('materiel.modifier_materiel', compact('materiels'));
    }
    public function ajouter_materiel_traitement(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'marque' => 'required',
            'etat' => 'required',
            'configuration' => 'required',
            'description' => 'required',
        ]);
        $materiel = new Materiel();
        $materiel->type = $request->type;
        $materiel->marque = $request->marque;
        $materiel->etat = $request->etat;
        $materiel->configuration = $request->configuration;
        $materiel->description = $request->description;
        $materiel->save();
        return redirect('/liste_materiel')->with('status', 'Le nouveau matériel a bien été ajouté avec succès');
    }
    public function modifier_materiel_traitement(Request $request)
    {
         $request->validate([
            'type' => 'required',
            'marque' => 'required',
            'etat' => 'required',
            'configuration' => 'required',
            'description' => 'required',
        ]);
        $materiel =  Materiel::find($request->id_materiel);
        $materiel->type = $request->type;
        $materiel->marque = $request->marque;
        $materiel->etat = $request->etat;
        $materiel->configuration = $request->configuration;
        $materiel->description = $request->description;
        $materiel->update();
        return redirect('/liste_materiel')->with('status', 'Modification du matériel effectuée avec succès.');
    }
}