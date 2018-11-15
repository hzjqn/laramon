<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Pokemon extends Model
{

    // Se apunta a la tabla indicada
    protected $table = 'pokemon';

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function evolves(){
        return $this->hasOne(Pokemon::class, 'id', 'evolves_id');
    }

    public function evolves_from(){
        return $this->hasOne(Pokemon::class, 'id', 'evolves_from_id');
    }
}
