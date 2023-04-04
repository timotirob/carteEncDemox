<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adresse extends Model
{
    use HasFactory;

    protected $table="etudiants_adresses";

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_Etudiant', 'id');
    }

}