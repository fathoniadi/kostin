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
use App\Provinsi;

class SearchController extends Controller
{
    public function index(Request $request)
    {
    	if($request->radius)
    	{
    		if($request->provinsi==0) $request->provinsi='';
            $data['kamars'] = Kamar::with(['medias','owner'])->where('provinsi_kamar','like','%'.$request->provinsi.'%')
                    ->where('kota_kamar','like','%'.$request->kota.'%')
                    ->where('tv', 'like' ,'%'.$request->fasilitas_tv.'%')
                    ->where('ac', 'like' ,'%'.$request->fasilitas_ac.'%')
                    ->where('km', 'like' ,'%'.$request->fasilitas_km.'%')
                    ->where('wf', 'like' ,'%'.$request->fasilitas_wifi.'%')
                    ->where('mj', 'like' ,'%'.$request->fasilitas_meja.'%')
                    ->where('kr', 'like' ,'%'.$request->fasilitas_kursi.'%')
                    ->where('kk', 'like' ,'%'.$request->fasilitas_kulkas.'%')
                    ->where('sewa_kamar', 'like' ,'%'.$request->penyewaan.'%')
                    ->where('gender_kamar', 'like' ,'%'.$request->gender.'%')
                    ->where(function($query) use ($request){
                        $query->orWhere('nama_kamar','like','%'.$request->keyword.'%');
                        $query->orWhere('alamat_kamar','like','%'.$request->keyword.'%');
                    })
                    ->where(DB::raw("ROUND( 6371 * ACOS(SIN( ".$request->lat." * PI()/180 ) * SIN(lat*PI()/180 ) + COS( ".$request->lat." * PI()/180 ) * COS( lat*PI()/180 )  *  COS( (lon*PI()/180) - (".$request->lg."*PI()/180))), 1)"),'<',$request->jrds);
        
            if($request->harga==3){
                $data['kamars'] = $data['kamars']->where('harga_kamar','>=','1000001')->orderBy(DB::raw("ROUND( 6371 * ACOS(SIN( ".$request->lat." * PI()/180 ) * SIN(lat*PI()/180 ) + COS( ".$request->lat." * PI()/180 ) * COS( lat*PI()/180 )  *  COS( (lon*PI()/180) - (".$request->lg."*PI()/180))), 1)"), 'ASC')->paginate(5);
            }
            elseif ($request->harga==2) {
                $data['kamars'] = $data['kamars']->whereBetween('harga_kamar', array(500000,1000000))->orderBy(DB::raw("ROUND( 6371 * ACOS(SIN( ".$request->lat." * PI()/180 ) * SIN(lat*PI()/180 ) + COS( ".$request->lat." * PI()/180 ) * COS( lat*PI()/180 )  *  COS( (lon*PI()/180) - (".$request->lg."*PI()/180))), 1)"), 'ASC')->paginate(5);
            }
            elseif($request->harga==1)
            {
                $data['kamars'] = $data['kamars']->whereBetween('harga_kamar', array(0,500000))->orderBy(DB::raw("ROUND( 6371 * ACOS(SIN( ".$request->lat." * PI()/180 ) * SIN(lat*PI()/180 ) + COS( ".$request->lat." * PI()/180 ) * COS( lat*PI()/180 )  *  COS( (lon*PI()/180) - (".$request->lg."*PI()/180))), 1)"), 'ASC')->paginate(5);

            }
            else{
                $data['kamars'] = $data['kamars']->orderBy(DB::raw("ROUND( 6371 * ACOS(SIN( ".$request->lat." * PI()/180 ) * SIN(lat*PI()/180 ) + COS( ".$request->lat." * PI()/180 ) * COS( lat*PI()/180 )  *  COS( (lon*PI()/180) - (".$request->lg."*PI()/180))), 1)"), 'ASC')->paginate(5);
            }
    	}
    	else{
    		if($request->provinsi==0) $request->provinsi='';
            $data['kamars'] = Kamar::with(['medias','owner'])->where('provinsi_kamar','like','%'.$request->provinsi.'%')
                ->where('kota_kamar','like','%'.$request->kota.'%')
                ->where('tv', 'like' ,'%'.$request->fasilitas_tv.'%')
                ->where('ac', 'like' ,'%'.$request->fasilitas_ac.'%')
                ->where('km', 'like' ,'%'.$request->fasilitas_km.'%')
                ->where('wf', 'like' ,'%'.$request->fasilitas_wifi.'%')
                ->where('mj', 'like' ,'%'.$request->fasilitas_meja.'%')
                ->where('kr', 'like' ,'%'.$request->fasilitas_kursi.'%')
                ->where('kk', 'like' ,'%'.$request->fasilitas_kulkas.'%')
                ->where('sewa_kamar', 'like' ,'%'.$request->penyewaan.'%')
                ->where('gender_kamar', 'like' ,'%'.$request->gender.'%')
                ->where(function($query) use ($request){
                    $query->orWhere('nama_kamar','like','%'.$request->keyword.'%');
                    $query->orWhere('alamat_kamar','like','%'.$request->keyword.'%');
                });

            if($request->harga==3){
                $data['kamars'] = $data['kamars']->where('harga_kamar','>=','1000001')->paginate(5);
            }
            elseif ($request->harga==2) {
                $data['kamars'] = $data['kamars']->whereBetween('harga_kamar', array(500000,1000000))->paginate(5);
            }
            elseif($request->harga==1)
            {
                $data['kamars'] = $data['kamars']->whereBetween('harga_kamar', array(0,500000))->paginate(5);

            }
            else{
                $data['kamars'] = $data['kamars']->paginate(5);
            }
            
    					
    	}
        $data['params'] = $request->all();
        $data['kota_terpilih'] = $request->kota;
        $data['provinsi_terpilih'] = $request->provinsi;
    	$data['provinsis'] = Provinsi::get();
    	return view('search.search', $data);
    }
}
