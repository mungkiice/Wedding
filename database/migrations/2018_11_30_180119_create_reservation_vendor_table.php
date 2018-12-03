<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_vendor', function (Blueprint $table) {
            $table->integer('reservation_id')->unsigned();
            $table->integer('vendor_id')->unsigned();

            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->foreign('reservation_id')->references('id')->on('reservations');            
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
        Schema::dropIfExists('reservation_vendor');
    }
}
