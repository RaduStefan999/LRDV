<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProiectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proiects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume');
            $table->string('email');
            $table->integer('clasa');
            $table->boolean('tip') ->default(false);
            $table->integer('sectiune_id');
            $table->string('scoala');
            $table->text('descriere');
            $table->string('url');
            $table->integer('judet_id');
            $table->string('prof_nume')->nullable();
            $table->string('prof_materie')->nullable();
            $table->string('elev_one');
            $table->string('elev_two')->nullable();
            $table->string('elev_three')->nullable();
            $table->string('elev_four')->nullable();
            $table->integer('punctaj') ->default(-1);
            $table->integer('premiu') ->default(0);
            $table->boolean('verificat') ->default(false);
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
        Schema::dropIfExists('proiects');
    }
}
