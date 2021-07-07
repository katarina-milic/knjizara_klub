<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    
    protected $table = "knjiga";
    public $timestamps = false;

    public function clanovi()
    {
        return $this->belongsToMany(Clan::class, "iznajmljivanje", "id_knjiga","id_clan");
    }
}


