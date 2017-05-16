<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $primaryKey='id_provinsi';
	public $timestamps = true;

	public function kotas(){
		return $this->hasMany('App\Provinsi','id_provinsi','id_provinsi');
	}

}
