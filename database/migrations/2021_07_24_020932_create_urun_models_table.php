<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_models', function (Blueprint $table) {
            $table->id();
            $table->integer('ukod');
            $table->string('uad',200);
            $table->string('uresim');
            $table->integer('ufiyat');
            $table->integer('uadet');
            $table->string('satici',50);
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
        Schema::dropIfExists('urun_models');
    }
}
