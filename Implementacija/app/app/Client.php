<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    
    protected $table='client';
    public $primaryKey='idUser';
    
    public function store($idUser){
        $this->idUser=$idUser;
        $this->save();
    }
    
}
