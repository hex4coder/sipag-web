<?php

use App\Models\JenisPerkara;
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
        Schema::create('perkaras', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_perkara')->unique();
            $table->foreignIdFor(JenisPerkara::class)->constrained();
            $table->string('pihak1');
            $table->string('pihak2');
            $table->string('saksi1');
            $table->string('saksi2');
            $table->string('saksi3');
            $table->string('tahapan_akhir')->default('');
            $table->dateTime('tanggal_registrasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkaras');
    }
};
