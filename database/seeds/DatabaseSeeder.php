<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('doctypes')->insert([
            'id' => 1,
            'name' => 'DNI'
        ]);
        DB::table('doctypes')->insert([
            'id' => 2,
            'name' => 'Pasaporte'
        ]);
        DB::table('doctypes')->insert([
            'id' => 3,
            'name' => 'Libreta Civica'
        ]);


        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Administrador'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Usuario'
        ]);
    }
}
