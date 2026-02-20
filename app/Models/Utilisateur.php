<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
      protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
    ];
    protected $table = "utilisateurs";

    // ✅ clé primaire personnalisée
    protected $primaryKey = "id_utilisateur";

    // Laravel doit savoir que c’est auto-increment
    public $incrementing = true;

    // Type de la clé
    protected $keyType = "int";
}