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
                "categoria" => App\Categoria::where('nombre', 'Frutas')->firstOrFail()->id,
                "precio" => "0120",
                "tipo" => App\Tipo::where('nombre', 'Kilo')->firstOrFail()->id,
            ],
            [
                "nombre" => "cereales choco",
                "categoria" => App\Categoria::where('nombre', 'Cereales')->firstOrFail()->id,
                "precio" => "0110",
                "tipo" => App\Tipo::where('nombre', 'Unidad')->firstOrFail()->id,
            ],
        ]);
    }
}
