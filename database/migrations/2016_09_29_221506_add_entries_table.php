<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->enum('type_voucher',['factura','boleta'])->default('factura');
            $table->string('serie_voucher',20);
            $table->string('num_voucher',20);
            $table->dateTime('date');
            $table->decimal('tax',4,2);
            $table->timestamps();

            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
        });

        Schema::create('entry_article', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entry_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->decimal('price_sale',11,2);
            $table->decimal('price_buy',11,2);
            
            $table->foreign('entry_id')->references('id')->on('entries')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
