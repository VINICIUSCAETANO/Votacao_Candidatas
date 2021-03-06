<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    protected $fillable = ['nomeVoter', 'emailVoter', 'candidata_id'];

    public function candidata(){
        return $this->belongsTo('App\Candidata');
        
    }
}
