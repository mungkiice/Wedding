<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('date');
            $table->enum('packet', [
                'paket akad/pemberkatan',
                'paket resepsi',
                'paket akad/pemberkatan dan resepsi'
            ]);
            $table->enum('status', [
                'canceled',
                'planning',
                'waiting for verification',
                'waiting for the Day',
                'done'
            ])->default('planning');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('reservations');
    }
}
