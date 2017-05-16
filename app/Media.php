<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $primaryKey='id_media';
	public $timestamps = true;
	protected $table = 'medias';

	public function kamar()
	{
		return $this->belongsTo('App\Kamar','id_kamar','id_kamar');
	}
}
