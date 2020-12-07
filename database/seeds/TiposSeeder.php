<?php

use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipos')->insert([
            [
                "nombre" => "kilo",
                "alias" => "Kg"
            ],
            [
                "nombre" => "unidad",
                "alias" => "Ud"
            ]
        ]);
    }
}
