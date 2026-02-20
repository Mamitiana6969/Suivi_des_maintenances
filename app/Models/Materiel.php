<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'marque',
        'etat',
        'configuration',
        'description',
    ];
     protected $table = "materiels";

    // ✅ clé primaire personnalisée
    protected $primaryKey = "id_materiel";

    // Laravel doit savoir que c’est auto-increment
    public $incrementing = true;

    // Type de la clé
    protected $keyType = "int";
}