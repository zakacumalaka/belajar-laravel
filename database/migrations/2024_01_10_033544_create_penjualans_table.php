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
        Schema::create('penjualans', function (Blueprint $table) {
            // $table->id();
            $table->integer('PenjualanID');
            $table->date('TanggalPenjualan');
            $table->decimal('TotalHarga',10,2);
            $table->integer('PelangganID');
            $table->foreign('PelangganID')->references('PelangganID')->on('pelanggans')->onUpdate('cascade')->onDelete('cascade');
            $table->primary('PenjualanID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
