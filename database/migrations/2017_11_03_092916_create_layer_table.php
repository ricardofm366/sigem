<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('layer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->unique();
            $table->boolean('visible');
            $table->unsignedDecimal('opacity', 1, 1);
            $table->string('source');
            $table->string('url');
            $table->string('params');
            $table->string('serverType');
            $table->integer('layer_group_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('groupid')->references('id')->on('layer_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('layer');
    }
}
