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

use App\Pengguna;

class DatadiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datadiri.datadiri');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doDatadiri(Request $request)
    {
        $messagesError = [ 
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'noidentitas.required' => 'No Identitas tidak boleh kosong',
            'notelepon.required' => 'No Telepon tidak boleh kosong',
            'tanggallahir.required' => 'Tanggal Lahir tidak boleh kosong',
            'jeniskelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            ];

        $validator = Validator::make($request->all(), [ 
                'nama' => 'required',
                'alamat' => 'required',
                'noidentitas' => 'required',
                'notelepon' => 'required',
                'tanggallahir' => 'required',
                'jeniskelamin' => 'required',
            ], $messagesError);

        if($validator->fails()) 
        { 
            return Redirect::to('/datadiri')
                ->withErrors($validator)->withInput();
        }

        $pengguna = Pengguna::find(Auth::user()->id_pengguna);
        //dd($pengguna);
        $pengguna->nama_pengguna = $request->nama;
        $pengguna->alamat_pengguna = $request->alamat;
        $pengguna->no_id_pengguna = $request->noidentitas;
        $pengguna->no_tlp_pengguna = $request->notelepon;
        $pengguna->tgl_lhr_pengguna = $request->tanggallahir;
        $pengguna->jenis_kel_pengguna = $request->jeniskelamin;
        $pengguna->save();

        return redirect('/datadiri')->with('success','Anda berhasil mengupdate data.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
