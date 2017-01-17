<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSalesTable extends Migration
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
            $table->integer('customer_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('type_voucher',['factura','boleta'])->default('factura');
            $table->string('serie_voucher',20);
            $table->string('num_voucher',20);
            $table->dateTime('date_sale');
            $table->decimal('tax',4,2);
            $table->decimal('total',11,2);
            $table->enum('state',['atendido','cancelado'])->default('atendido');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('article_sale', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('sale_id')->unsigned();
            $table->decimal('price_sale',11,2);
            $table->integer('quantity')->unsigned();
            $table->decimal('discount',11,2);
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
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
