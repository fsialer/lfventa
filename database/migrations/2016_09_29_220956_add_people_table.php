<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',90);
            $table->enum('type_document',['dni','ruc','pas']);
            $table->string('num_document',40);
            $table->string('phone',40);
            $table->string('email',60)->unique();
            $table->enum('state',['activo','inactivo'])->default('activo');
             $table->enum('type',['proveedor','cliente']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
