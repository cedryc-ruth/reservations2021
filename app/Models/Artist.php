<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
    ];

    protected $table = 'artists';

    public $timestamps = false;

    //Relations
    public function types() {
        return $this->belongsToMany(Type::class);
    }

    public function artistTypes() {
        return $this->hasMany(ArtistType::class);
    }

}
