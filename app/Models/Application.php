<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'whatsapp',
        'email',
        'program',
        'country',
        'subject',
        'photo',
        'address',
        'amount',
        'status',
        'other',
    ];
}
