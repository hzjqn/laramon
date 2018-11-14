<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Pokemon extends Model
{

    // Se apunta a la tabla indicada
    protected $table = 'pokemon';

    public function tipo(){
        return $this->belongsTo(Type::class);
    }
}
