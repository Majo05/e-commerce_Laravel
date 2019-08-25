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

        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Sillones'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Sillas'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Almohadones'
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Acolchados'
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Alfombras'
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Cortinas'
        ]);

        DB::table('brands')->insert([
            'id' => 1,
            'name' => 'Casa House'
        ]);
        DB::table('brands')->insert([
            'id' => 2,
            'name' => 'Casa Mia'
        ]);
        DB::table('brands')->insert([
            'id' => 3,
            'name' => 'Cannon'
        ]);
        DB::table('brands')->insert([
            'id' => 4,
            'name' => 'Arredo'
        ]);
        DB::table('brands')->insert([
            'id' => 5,
            'name' => 'Ama de Casa'
        ]);
    }
}
