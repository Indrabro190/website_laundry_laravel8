<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cabang_id')->unsigned();
            $table->unsignedBigInteger('customer_id')->unsigned();
            $table->unsignedBigInteger('tipepaket_id')->unsigned();
            $table->unsignedBigInteger('namapaket_id')->unsigned();
            $table->date('tanggalselesai');
            $table->bigInteger('jumlah');
            $table->bigInteger('berat');
            $table->integer('total_bayar');
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
        Schema::dropIfExists('transaksis');
    }
}
