<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categorias')->insert([
            [
                "nombre" => "frutas"
            ],
            [
                "nombre" => "verduras"
            ],
            [
                "nombre" => "carnes"
            ],
            [
                "nombre" => "pescados"
            ],
            [
                "nombre" => "cereales"
            ],
            [
                "nombre" => "lacteos"
            ],
            [
                "nombre" => "limpieza"
            ],
            [
                "nombre" => "higiene"
            ],
            [
                "nombre" => "dulces"
            ],
            [
                "nombre" => "snacks"
            ],
        ]);
    }
}
