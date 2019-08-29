<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date');
            $table->decimal('amount', 8, 2);

            $table->unsignedBigInteger('user_id');
          /*  $table->foreign('user_id')->references('id')->on('users');*/

            $table->unsignedBigInteger('pay_type_id');
          /*  $table->foreign('pay_type_id')->references('id')->on('paytypes');*/

            $table->timestamps();
          //  $table->primary(['id', 'user_id', 'date']);
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
        Schema::dropIfExists('sales');
    }
}
