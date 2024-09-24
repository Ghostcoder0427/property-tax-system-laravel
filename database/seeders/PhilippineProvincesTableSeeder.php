<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhilippineProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('provinces')->count()) {
            DB::unprepared(file_get_contents(__DIR__ . '../seeds/sql/philippine_provinces.sql'));
        }
    }
}
