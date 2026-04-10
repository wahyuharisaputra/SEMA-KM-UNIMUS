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
        Schema::create('program_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->text('deskripsi')->nullable();
            $table->text('tujuan')->nullable();
            $table->date('timeline_start')->nullable();
            $table->date('timeline_end')->nullable();
            $table->enum('status_pelaksanaan', ['perencanaan', 'berjalan', 'selesai'])->default('perencanaan');
            $table->foreignId('divisi_id')->constrained('divisis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kerjas');
    }
};
