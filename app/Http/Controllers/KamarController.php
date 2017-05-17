<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
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
use App\Media;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['provinsis'] = Provinsi::get();
        return view('kamar.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'judul.required' => 'Judul harus diisi.',
            'ketersediaan.required' => 'Jumlah Ketersediaan harus diisi.',
            'harga.required' => 'Harga harus diisi.',
            'harga.numeric' => 'Harga diisi dengan angka.',
            'ketersediaan.numeric' => 'Jumlah Ketersediaan diisi dengan angka.',
            'penyewaan.required' => 'Penyewaan harus diisi.',
            'gender.required' => 'Gender harus diisi.',
            'provinsi.min' => 'Provinsi harus diisi.',
            'kota.required' => 'Kota harus diisi.',
            'lokasi.required' => 'Lokasi harus diisi.',
        ];


        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'harga' => 'required|numeric',
            'penyewaan' => 'required',
            'ketersediaan' => 'required|numeric',
            'gender' => 'required',
            'provinsi' => 'min:1',
            'kota' => 'required',
            'lokasi' => 'required',
        ], $messages);

        if($validator->fails()) 
        { 
            return Redirect::to($request->url().'/create')
                ->withErrors($validator)->withInput();
        }

        $kamar = new Kamar();
        $kamar->nama_kamar = $request->judul;
        $kamar->jumlah_kamar = $request->ketersediaan;
        $kamar->harga_kamar = $request->harga;
        $kamar->sewa_kamar = $request->penyewaan;
        $kamar->gender_kamar = $request->gender;
        $kamar->id_pengguna = Auth::user()->id_pengguna;
        $kamar->tv = ($request->fasilitas_tv?1:0);
        $kamar->ac = ($request->fasilitas_ac?1:0);
        $kamar->km = ($request->fasilitas_km?1:0);
        $kamar->wf = ($request->fasilitas_wifi?1:0);
        $kamar->mj = ($request->fasilitas_meja?1:0);
        $kamar->kr = ($request->fasilitas_kursi?1:0);
        $kamar->kk = ($request->fasilitas_kulkas?1:0);
        $kamar->lon = $request->longitude;
        $kamar->lat = $request->latitude;
        $kamar->alamat_kamar = $request->lokasi;

        if($kamar->save())
        {
            $destination_path = public_path().'/media';
            $file_uploadeds = array();
            foreach ($request->file('media') as $key => $value) {

                $name_upload = date('now').$value->getClientOriginalName();
                if($value->move($destination_path, $name_upload )){
                    array_push($file_uploadeds, $name_upload);
                }
            }

            foreach ($file_uploadeds as $value) {
                $media = new Media();
                $media->nama_media = $value;
                $media->path_media = '/media/';
                $media->id_kamar = $kamar->id_kamar;
                $media->save();
            }

            return Redirect::to(str_replace('/kamar', '', $request->url()))->with('message','Sukses menyimpan data Kamar Baru');
        }
        else{
            return Redirect::to($request->url().'/create')->withErrors('<strong>Gagal!</strong> Gagal menyimpan data Kamar Baru');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kamar, Request $request)
    {
        $kamar = Kamar::find($id_kamar);
        if(!$kamar) return abort(404);
        $media = Media::where('id_kamar', $id_kamar)->delete();
        $kamar->delete();

        return Redirect::to(str_replace('/kamar/'.$id_kamar, '', $request->url()))->with('message','Sukses menghapus data Kamar');
        
    }

    public function lihatdetail($id_kamar)
    {
        $data['kamar'] = Kamar::with(['medias','owner'])->find($id_kamar);

        if(!$data['kamar']) return abort(404);
        return view('detailkamar.detailkamar', $data);
    }
}
