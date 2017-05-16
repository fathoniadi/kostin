<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(Penggunas::class);
        $this->call(Provinsis::class);
        $this->call(Kotas::class);

    }
}
