<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('mobil_id');
            $table->unsignedBigInteger('supir_id')->nullable();
            $table->date('tanggal_rental');
            $table->date('tanggal_pengembalian');
            $table->date('tanggal_pengembalian_sebenarnya')->nullable();
            $table->double('denda');
            $table->double('total_biaya');
            $table->integer('isDone');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('mobil_id')->references('id')->on('mobils');
            $table->foreign('supir_id')->references('id')->on('supirs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
