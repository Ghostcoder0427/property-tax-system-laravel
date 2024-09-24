<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PhilippineCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('cities')->count()) {
            DB::unprepared(file_get_contents(__DIR__ . '/database/seeds/sql/philippine_cities.sql'));
        }
    }
}
