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
        $this->call('CategoriasSeeder');
        $this->call('TiposSeeder');
        $this->call('ProductosSeeder');
        $this->call('users');
    }
}
