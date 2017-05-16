<?php

use Illuminate\Database\Seeder;
use App\Provinsi;
class Provinsis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = new Provinsi();
        $provinsi->nama_provinsi = 'Jawa Timur';
        $provinsi->save();

        $provinsi = new Provinsi();
        $provinsi->nama_provinsi = 'Jawa Tengah';
        $provinsi->save();

        $provinsi = new Provinsi();
        $provinsi->nama_provinsi = 'Yogyakarta';
        $provinsi->save();
    }
}
