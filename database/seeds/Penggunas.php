<?php

use Illuminate\Database\Seeder;
use App\Pengguna;

class Penggunas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengguna = new Pengguna();
        $pengguna->email = 'fathoni.adi@gmail.com';
        $pengguna->password = bcrypt('kucinglucu');
        $pengguna->nama_pengguna = 'Thoni';
        $pengguna->alamat_pengguna = 'Klaten';
        $pengguna->no_tlp_pengguna = '085641112322';
        $pengguna->tgl_lhr_pengguna = '1996-03-04';
        $pengguna->jenis_kel_pengguna = 0;
        $pengguna->no_id_pengguna = '5114100020';
        $pengguna->save();
    }
}
