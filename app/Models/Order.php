<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'adresse'
    ];

    public function popo()
    {
        return $this->belongsTo(User::class, 'client');
    }
}
