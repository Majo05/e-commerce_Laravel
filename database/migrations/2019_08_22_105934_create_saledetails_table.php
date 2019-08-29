<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaledetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saledetails', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();

            $table->unsignedBigInteger('sale_id');
        /*    $table->foreign('sale_id')->references('id')->on('sales');*/

            $table->unsignedBigInteger('user_id');
        /*    $table->foreign('user_id')->references('id')->on('users');*/

            $table->unsignedBigInteger('product_id');
        /*    $table->foreign('product_id')->references('id')->on('product');*/

            $table->integer('unit');

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saledetails');
    }
}
