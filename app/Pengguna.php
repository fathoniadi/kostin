<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
	use Notifiable;
    protected $primaryKey='id_pengguna';
	public $timestamps = true;

	public function kamars(){
		return $this->hasMany('App\Kamar','pengguna_id','pengguna_id');
	} 
}
