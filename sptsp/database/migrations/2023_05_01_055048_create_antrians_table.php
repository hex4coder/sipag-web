<?php

use App\Models\Perkara;
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
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Perkara::class)->constrained();
            $table->string('sidang_ke');
            $table->string('nomor_antrian')->default('001');
            $table->string('agenda');
            $table->enum('ruang_sidang', [
                'Ruang Sidang 1',
                'Ruang Sidang 2'
            ])->default('Ruang Sidang 1');
            $table->string('km_pp_jsp');
            $table->enum('status', [
                0, // baru
                1, // diterima
                2, // dipanggil
                3, // sedang sidang
                4, // selesai sidang
                5, // pass lewat
            ])->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
