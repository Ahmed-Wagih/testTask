<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* saturday, sunday, monday, tuesday, wednesday, thursday, friday */
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bio');
            $table->string('total_rate');
            $table->integer('price');
            $table->integer('sessions');
            $table->string('image');
            $table->unsignedBigInteger('specialize_id');
            $table->foreign('specialize_id')->references('id')->on('specializes')->onDelete('cascade')->onUpdate('cascade');
            $table->time('saturday_open');
            $table->time('saturday_close');
            $table->time('sunday_open');
            $table->time('sunday_close');
            $table->time('monday_open');
            $table->time('monday_close');
            $table->time('tuesday_open');
            $table->time('tuesday_close');
            $table->time('wednesday_open');
            $table->time('wednesday_close');
            $table->time('thursday_open');
            $table->time('thursday_close');
            $table->time('friday_open');
            $table->time('friday_close');
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
        Schema::dropIfExists('doctors');
    }
}
