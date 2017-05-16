<?php

use Illuminate\Database\Seeder;
use App\Kota;

class Kotas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kota = new Kota();
        $kota->nama_kota = 'Surabaya';
        $kota->id_provinsi = 1;
        $kota->save();

        $kota = new Kota();
        $kota->nama_kota = 'Malang';
        $kota->id_provinsi = 1;
        $kota->save();


        $kota = new Kota();
        $kota->nama_kota = 'Klaten';
        $kota->id_provinsi = 2;
        $kota->save();

        $kota = new Kota();
        $kota->nama_kota = 'Solo';
        $kota->id_provinsi = 2;
        $kota->save();

        $kota = new Kota();
        $kota->nama_kota = 'Semarang';
        $kota->id_provinsi = 2;
        $kota->save();

        $kota = new Kota();
        $kota->nama_kota = 'Purwokerto';
        $kota->id_provinsi = 2;
        $kota->save();


        $kota = new Kota();
        $kota->nama_kota = 'Bantul';
        $kota->id_provinsi = 3;
        $kota->save();
    }
}
