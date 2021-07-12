<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'adresse', 'id_classe',
    ];

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }
}
