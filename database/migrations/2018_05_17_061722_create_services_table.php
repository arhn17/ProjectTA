<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_services')->nullable();
            $table->integer('tarif_member')->nullable();
            $table->integer('tarif_normal')->nullable();
            $table->integer('tipe')->nullable();
            $table->string('level')->nullable();
            $table->integer('durasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
