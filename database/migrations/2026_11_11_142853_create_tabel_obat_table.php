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
        Schema::create('tabel_obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat', 100);
            $table->string('kategori', 50);
            $table->string('sediaan', 50);
            $table->string('pabrikan', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_obat');
    }
};
