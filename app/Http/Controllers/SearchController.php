<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;

use Response;
use Redirect;
use Uuid;
use Session;
use DB;
use File;

use App\Kamar;

class SearchController extends Controller
{
    public function index(Request $request)
    {
    	if($request->radius)
    	{
    		$kamar = Kamar::where('provinsi_kamar','like','%'.$request->provinsi.'%')
    					->where('kota_kamar','like','%'.$request->kota.'%')
    					->orWhere('nama_kamar','like','%'.$request->keyword.'%')
    					->orWhere('alamat_kamar','like','%'.$request->keyword.'%')
    					->select(array('kamars.*', 
    						DB::raw("ROUND( 6371 * ACOS(SIN( ".$request->lat." * PI()/180 ) * SIN(lat*PI()/180 ) + COS( ".$request->lat." * PI()/180 ) * COS( lat*PI()/180 )  *  COS( (lon*PI()/180) - (".$request->lg."*PI()/180))), 1) distance")
    						))
    					->having('distance','<', $request->jrds)
    					->get();
    	}
    	else{
    		$kamar = Kamar::where('provinsi_kamar','like','%'.$request->provinsi.'%')
    					->where('kota_kamar','like','%'.$request->kota.'%')
    					->orWhere('nama_kamar','like','%'.$request->keyword.'%')
    					->orWhere('alamat_kamar','like','%'.$request->keyword.'%')
    					->get();
    	}
    	dd($kamar);
    }
}
