<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $primaryKey='id_kota';
	public $timestamps = true;

	public function provinsi(){
		return $this->belongsTo('App\Provinsi','id_provinsi','id_provinsi');
	}
}
