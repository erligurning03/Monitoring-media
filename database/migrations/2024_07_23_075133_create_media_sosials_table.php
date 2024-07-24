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
        Schema::create('media_sosials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('cuplikan_sosmed');
            $table->string('platform_sosmed');
            // $table->timestamps('media_publikasi');
            $table->enum('jenis_komentar',['positif', 'negatif','netral','rilis']);
            $table->string('ringkasan_berita');
            $table->string('saran_tindak_lanjut');
            $table->timestamp('waktu_tinjau');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_sosials');
    }
};
