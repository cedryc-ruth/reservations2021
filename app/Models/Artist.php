<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    private $fillable = [
        'firstname',
        'lastname',
    ];

    private $table = 'artists';

    private $timestamps = false;

}
