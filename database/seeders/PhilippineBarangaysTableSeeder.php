<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhilippineBarangaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('barangays')->count()) {
            DB::unprepared(file_get_contents(__DIR__ . '/database/seeds/sql/philippine_barangays.sql'));
        }
    }
}
