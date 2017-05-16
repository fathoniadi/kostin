<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $primaryKey='id_kamar';
	public $timestamps = true;

	public function owner(){
		return $this->belongsTo('App\Pengguna','pengguna_id','pengguna_id');
	}

	public function medias(){
		return $this->hasMany('App\Media','id_kamar','id_kamar');
	}
}
