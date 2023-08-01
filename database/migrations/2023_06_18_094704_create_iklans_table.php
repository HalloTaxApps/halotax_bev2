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
        Schema::create('iklans', function (Blueprint $table) {
            $table->id();
            $table->string('mitra');
            $table->string('judul');
            $table->string('imageUrl1');
            $table->string('imageUrl2')->nullable();
            $table->string('imageUrl3')->nullable();
            $table->string('imageUrl4')->nullable();
            $table->string('imageUrl5')->nullable();
            $table->string('deskripsi');
            $table->string('info');
            $table->string('syarat');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iklans');
    }
};
