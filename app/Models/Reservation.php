<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'representation_id',
        'places',
    ];

    protected $table = 'representation_user';

    public $timestamps = false;

}
