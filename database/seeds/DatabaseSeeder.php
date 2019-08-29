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
    DB::table('products')->insert([
        'id' => 36,
        'name' => 'Silla Eames',
        'description'=>'Patas de madera lustrada e hilos de acero, efecto sobrio y moderno.',
        'dimension'=>'81×46×54cm',
        'category_id'=>'2',
        'price'=>1600,
        'stock'=>75,
        'marca_id'=>3,
        'image' => '6-sillas.jpg'
    ]);
    DB::table('products')->insert([
        'id' => 37,
        'name' => 'Silla Tolix Especial',
        'description'=>'Modelo retro ideal para múltiples ambientes de hogar u oficina.',
        'dimension'=>'85×45×54cm',
        'category_id'=>'2',
        'price'=>1750,
        'stock'=>60,
        'marca_id'=>3,
        'image' => '7-sillas.jpg'
    ]);
    DB::table('products')->insert([
        'id' => 38,
        'name' => 'Silla Berry',
        'description'=>'Modelo nórdico con curvas delicadas y materiales de gran resistencia.',
        'dimension'=>'82×40×40cm',
        'category_id'=>'2',
        'price'=>980,
        'stock'=>38,
        'marca_id'=>1,
        'image' => '8-sillas.jpg'
    ]);
    DB::table('products')->insert([
        'id' => 39,
        'name' => 'Silla Lund',
        'description'=>'Combina líneas claras y formas refinadas con una interpretación lúdica.',
        'dimension'=>'75×51×50cm',
        'category_id'=>'2',
        'price'=>1200,
        'stock'=>40,
        'marca_id'=>2,
        'image' => '9-sillas.jpg'
    ]);
    DB::table('products')->insert([
        'id' => 40,
        'name' => 'Silla Gustaf',
        'description'=>'Estructura clásica junto a diseño fresco, moderno, joven y vibrante.',
        'dimension'=>'85×57×52cm',
        'category_id'=>'2',
        'price'=>1100,
        'stock'=>22,
        'marca_id'=>2,
        'image' => '10-sillas.jpg'
    ]);
    DB::table('products')->insert([
        'id' => 41,
        'name' => 'Almohadón con pelo',
        'description'=>'Cuadrado, poliéster',
        'dimension'=>'46x45cm',
        'category_id'=>'3',
        'price'=>450,
        'stock'=>120,
        'marca_id'=>3,
        'image' => '11-almohadones.jpg'
    ]);
    DB::table('products')->insert([
        'id' => 42,
        'name' => 'Almohadón Tiburón',
        'description'=>'Cuadrado, algodón estampado',
        'dimension'=>'46x45cm',
        'category_id'=>'3',
        'price'=>450,
        'stock'=>120,
        'marca_id'=>3,
        'image' => '11-almohadones.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 43,
        'name' => 'Almohadón Fabri',
        'description'=>'Rectangular, algodón estampado',
        'dimension'=>'40x60cm',
        'category_id'=>'3',
        'price'=>800,
        'stock'=>120,
        'marca_id'=>2,
        'image' => '13-almohadones.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 44,
        'name' => 'Almohadón Chunki',
        'description'=>'Cuadrado, algodón y poliéster',
        'dimension'=>'50x50cm',
        'category_id'=>'3',
        'price'=>1100,
        'stock'=>130,
        'marca_id'=>3,
        'image' => '14-almohadones.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 45,
        'name' => 'Almohadón Dino',
        'description'=>'Cuadrado, algodón y poliéster',
        'dimension'=>'38x38cm',
        'category_id'=>'3',
        'price'=>1100,
        'stock'=>32,
        'marca_id'=>4,
        'image' => '15-almohadones.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 46,
        'name' => 'Acolchado Noruega bicolor',
        'description'=>'Plumón sintetico liso, poliéster',
        'dimension'=>'160x220cm',
        'category_id'=>'4',
        'price'=>2500,
        'stock'=>80,
        'marca_id'=>1,
        'image' => '16-acolchados.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 47,
        'name' => 'Acolchado Estocolmo',
        'description'=>'Plumón sintético, microfibra y corderito',
        'dimension'=>'210x225cm',
        'category_id'=>'4',
        'price'=>3500,
        'stock'=>30,
        'marca_id'=>1,
        'image' => '17-acolchados.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 48,
        'name' => 'Acolchado Ptagoras',
        'description'=>'Estampado, exterior 100% algodón, interior sintético',
        'dimension'=>'210x225cm',
        'category_id'=>'4',
        'price'=>3700,
        'stock'=>23,
        'marca_id'=>3,
        'image' => '18-acolchados.jpg'
    ]);

    DB::table('products')->insert([
        'id' => 49,
        'name' => 'Acolchado Ptagoras',
        'description'=>'Estampado, exterior 100% algodón, interior sintético',
        'dimension'=>'210x225cm',
        'category_id'=>'4',
        'price'=>3700,
        'stock'=>23,
        'marca_id'=>3,
        'image' => '19-acolchados.jpg'
    ]);

  

        DB::table('products')->insert([
            'id' => 50,
            'name' => 'Acolchado corderito',
            'description'=>'Plumón sintético estampado, poliéster',
            'dimension'=>'180x2400cm',
            'category_id'=>'4',
            'price'=>2500,
            'stock'=>18,
            'marca_id'=>3,
            'image' => '20-acolchados.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 51,
            'name' => 'Alfombra Welcome',
            'description'=>'Tejido sintético a máquina, estampado',
            'dimension'=>'40x70cm',
            'category_id'=>'5',
            'price'=>900,
            'stock'=>35,
            'marca_id'=>3,
            'image' => '21-alfombras.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 52,
            'name' => 'Alfombra Mica',
            'description'=>'Rectangular, tejido natural, tramado',
            'dimension'=>'60x90cm',
            'category_id'=>'5',
            'price'=>760,
            'stock'=>23,
            'marca_id'=>2,
            'image' => '22-alfombras.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 53,
            'name' => 'Alfombra Nature',
            'description'=>'Tejido sintético, rectangular',
            'dimension'=>'57x90cm',
            'category_id'=>'5',
            'price'=>660,
            'stock'=>17,
            'marca_id'=>2,
            'image' => '23-alfombras.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 54,
            'name' => 'Alfombra Nordic',
            'description'=>'Modelo nórdico sintético, rectangular',
            'dimension'=>'160x230cm',
            'category_id'=>'5',
            'price'=>1800,
            'stock'=>28,
            'marca_id'=>3,
            'image' => '24-alfombras.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 55,
            'name' => 'Alfombra Dhurrie',
            'description'=>'Tejido hindú, algodón, rectangular',
            'dimension'=>'50x80cm',
            'category_id'=>'5',
            'price'=>1700,
            'stock'=>16,
            'marca_id'=>4,
            'image' => '25-alfombras.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 56,
            'name' => 'Cortina Textura Espiga',
            'description'=>'De ambiente, poliéster, liso, colgado Ojal',
            'dimension'=>'140x230cm',
            'category_id'=>'6',
            'price'=>6500,
            'stock'=>28,
            'marca_id'=>1,
            'image' => '26-cortinas.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 57,
            'name' => 'Cortinas Jacquard',
            'description'=>'De ambiente, 2 paños, 100% poliéster',
            'dimension'=>'220x145cm',
            'category_id'=>'6',
            'price'=>4300,
            'stock'=>15,
            'marca_id'=>2,
            'image' => '27-cortinas.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 58,
            'name' => 'Cortina Enrollable Lisa',
            'description'=>'Roller bambú, sintético',
            'dimension'=>'90x220cm',
            'category_id'=>'6',
            'price'=>5400,
            'stock'=>34,
            'marca_id'=>2,
            'image' => '28-cortinas.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 59,
            'name' => 'Cortina de Ambiente Madrid Azul',
            'description'=>'Tela polialgodón, decorativa, incluye abrazadera',
            'dimension'=>'140x225cm',
            'category_id'=>'6',
            'price'=>3000,
            'stock'=>20,
            'marca_id'=>3,
            'image' => '29-cortinas.jpg'
        ]);

        DB::table('products')->insert([
            'id' => 60,
            'name' => 'Cortina New Velvet Tabaco',
            'description'=>'Material sintético, poliéster, fabricada en felpa',
            'dimension'=>'140x220cm',
            'category_id'=>'6',
            'price'=>3500,
            'stock'=>62,
            'marca_id'=>4,
            'image' => '30-cortinas.jpg'
        ]);

    

    }
}
