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
         Schema::create('tagihans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('penggunaan_listrik_id')->constrained();
        $table->decimal('jumlah_tagihan', 10, 2);
        $table->enum('status', ['Belum Dibayar', 'Lunas'])->default('Belum Dibayar');
        $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};
