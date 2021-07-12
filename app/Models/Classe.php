<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Eleve;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function eleves(){
        return $this->hasMany(Eleve::class, 'id_classe');
    }
}

