<?php

namespace App\Models;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bien extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'surface',
        'chambre',
        'piece',
        'prix',
        'travaux_prevoir',
        'ville',
        'commune',
        'quartier',
        'avenue',
        'numero',
        'etat',
        'category_id'
    ];
    public function Cat():BelongsTo
    {
        return $this->belongsTo(Cat::class);
    } 
}
