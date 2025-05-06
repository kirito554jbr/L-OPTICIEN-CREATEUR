<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraitemnetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitemnets', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('rendez_vous');
            $table->foreign('rendez_vous')->references('id')->on('rendez_vous')->onDelete('cascade');
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
        Schema::dropIfExists('traitemnets');
    }
}
