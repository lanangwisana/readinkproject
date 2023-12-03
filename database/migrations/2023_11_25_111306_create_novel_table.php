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
        Schema::create('novel', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);
            $table->string('sinopsis', 200);
            $table->string('genre', 50);
            $table->string('tokohUtama', 200);
            $table->string('tglrilis', 50);
            $table->string('penulis', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novel');
    }
};
