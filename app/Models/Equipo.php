<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
class Equipo extends Model
{
    use HasFactory;

    public function partido(){
        return $this->belongsTo('App\Models\Partido');
    }
    //INICIO MUTADORES Y ACCESORES//
    protected function name ():Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value),
        );
    }
    protected function campo ():Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value),
        );
    }
    //FIN MUTADORES Y ACCESORES//
}
