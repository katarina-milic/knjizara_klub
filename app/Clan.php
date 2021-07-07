<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $table = "clan";
    public $timestamps = false;

    public function iznajmljivanja()
    {
        return $this->belongsToMany(Knjiga::class, "iznajmljivanje", "id_clan","id_knjiga");
    }
}
