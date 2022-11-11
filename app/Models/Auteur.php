<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auteur extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Empêche _aucune_ colonne d'être remplie
    protected $guarded = [];
}
