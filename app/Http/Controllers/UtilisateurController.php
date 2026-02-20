<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
class UtilisateurController extends Controller
{
    //
    public function liste_utilisateur()
    {
        $utilisateurs = Utilisateur::all();
        return view ('utilisateur.liste_utilisateur', compact('utilisateurs'));
    }
   public function ajouter_utilisateur()
   {
    return view ('utilisateur.ajouter_utilisateur');        
   }
   public function modifier_utilisateur($id_utilisateur)
   {
    $utilisateurs = Utilisateur::find($id_utilisateur);
    return view ('utilisateur.modifier_utilisateur', compact('utilisateurs'));
   }
   public function ajouter_utilisateur_traitement(Request $request)
   {
     $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);
        $utilisateur = new Utilisateur();
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->save();
        return redirect('/liste_utilisateur')->with('status', 'Utilisateur a bien été ajouté avec succes');
   }
   public function modifier_utilisateur_traitement(Request $request)
{
    $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);
        $utilisateur = Utilisateur::find($request->id_utilisateur);
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->update();
        return redirect('/liste_utilisateur')->with('status', 'Utilisateur a bien été modifié avec succes');
}
}