<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('productos')->insert([
            [
                "nombre" => "naranjas",
                "precio" => "0120",
                "categoria" => "frutas"
            ],
            [
                "nombre" => "cereales chocolate",
                "precio" => "0095",
                "categoria" => "cereales"
            ],
        ]);
    }
}
