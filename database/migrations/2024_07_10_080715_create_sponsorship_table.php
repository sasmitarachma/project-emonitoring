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
        Schema::create('sponsorship', function (Blueprint $table) {
            $table->id();
            $table->string('asal_proposal');
            $table->string('judul_proposal');
            $table->date('waktu_masuk');
            $table->date('waktu_diterima');
            $table->boolean('approved');
            $table->string('disposisi');
            $table->string('nilai_diajukan', 15, 2);
            $table->string('nilai_diterima', 15, 2);
            $table->string('jumlah');
            $table->string('evidence_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorship');
    }
};
