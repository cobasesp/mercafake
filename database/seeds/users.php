<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                "name" => "David Cobas",
                "email" => "cobas@correo.es",
                "password" => "827ccb0eea8a706c4c34a16891f84e7b",
                "address" => "calle falsa 123"
            ]
        ]);
    }
}
