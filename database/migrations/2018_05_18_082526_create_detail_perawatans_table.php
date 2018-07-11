<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPerawatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_perawatans', function (Blueprint $table) {
            $table->integer('pesanan_id')->unsigned();
            $table->integer('perawatan_id')->unsigned();
            $table->integer('therapist_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('ruangan_id')->unsigned();
            $table->integer('paket_id')->unsigned();
            $table->integer('status_perawatan')->nullable();
            $table->float('diskon')->nullable(); 
            $table->integer('harga')->nullable(); 
            $table->foreign('pesanan_id')->references('id')->on('transaksis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('perawatan_id')->references('id')->on('perawatans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('therapist_id')->references('id')->on('therapists')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ruangan_id')->references('id')->on('ruangans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('paket_id')->references('id')->on('pakets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('detail_perawatans');
    }
}
