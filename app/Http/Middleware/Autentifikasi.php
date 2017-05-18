<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Autentifikasi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::user()) {
            return redirect('/login')->withErrors('Silahkan login terlebih dahulu.');
        }

        if(Auth::user()){

            if($request->is('dashboard') || $request->is('dashboard/*'))
            {
                 if(Auth::user()->nama_pengguna == null || Auth::user()->alamat_pengguna ==null || Auth::user()->no_tlp_pengguna == null || Auth::user()->tgl_lhr_pengguna == null || Auth::user()->jenis_kel_pengguna == null ){
                return redirect('/datadiri')->withErrors('Silahkan isi semua data diri terlebih dahulu.');
                }
            }
        }
        
        return $next($request);
    }
}
