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

        DB::table('faqs')->insert([
           'id' => 1,
           'question' => '¿Como creo una cuenta en Deco House 860?',
           'answer' => 'Resgistrate, carga tus datos y listo!'
       ]);
       DB::table('faqs')->insert([
           'id' => 2,
           'question' => '¿Como compro en Deco House 860?',
           'answer' => 'Luego de haberte registrado, inicia sesion. Elegi los productos que te gusten, cargalos al carrito y luego podras pagarlos y oordinar entrega'
       ]);
       DB::table('faqs')->insert([
           'id' => 3,
           'question' => 'Politica de cambios y devoluciones',
           'answer' => 'En caso que el cambio sea por falla del producto, tendra 15 dias de prueba. En caso de cambio por color o modelo el plazo es de 3 dias y por cuenta del comprador.'
       ]);

       DB::table('products')->insert([
        'id' => 31,
        'name' => 'Sillón Cubick',
        'description'=>'Esquinero en chenille de 3 cuerpos, placa soft intercambiable.',
        'dimension'=>'180x70cm',
        'category_id'=>'1',
        'price'=>23500,
        'stock'=>50,
        'marca_id'=>1,
        'image' => '1-sillon.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 32,
        'name' => 'Futón Wave',
        'description'=>'Combina líneas claras y formas refinadas con una interpretación lúdica.',
        'dimension'=>'100x53cm',
        'category_id'=>'1',
        'price'=>23990,
        'stock'=>36,
        'marca_id'=>3,
        'image' => '2-sillon.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 33,
        'name' => 'Sillón Rafa',
        'description'=>'Sillón de 3 cuerpos, estructura de madera, patas de madera.',
        'dimension'=>'208x87cm',
        'category_id'=>'1',
        'price'=>33990,
        'stock'=>45,
        'marca_id'=>3,
        'image' => '3-sillon.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 34,
        'name' => 'Sillón Lion',
        'description'=>'Sillón de 2 cuerpos, relleno de espuma poliuretano y tapiz de tela.',
        'dimension'=>'140x85cm',
        'category_id'=>'1',
        'price'=>27490,
        'stock'=>25,
        'marca_id'=>1,
        'image' => '4-sillon.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 35,
        'name' => 'Futón Faith',
        'description'=>'Futón de 3 cuerpos hecho en poliéster, relleno de espuma.',
        'dimension'=>'196x91cm',
        'category_id'=>'1',
        'price'=>30000,
        'stock'=>15,
        'marca_id'=>1,
        'image' => '5-sillon.jpg'
    ]);

    }
}
