<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prix',
        'description',
        'image',
        'quantiter',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function orderedItems()
    {
        return $this->hasMany(Ordered_items::class);
    }
}
