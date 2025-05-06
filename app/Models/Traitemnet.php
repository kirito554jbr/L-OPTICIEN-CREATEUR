<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitemnet extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rendezvous()
    {
        return $this->belongsTo(RendezVous::class);
    }
}
