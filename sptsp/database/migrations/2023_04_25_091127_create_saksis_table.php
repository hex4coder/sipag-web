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
        Schema::create('saksis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Perkara::class)->constrained();
            $table->integer('saksi_ke')->default(1);
            // biodata
            $table->string('nama');
            $table->string('bin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            // alamat
            $table->string('jln');
            $table->string('dusun');
            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->enum('jk', ['lk', 'pr'])->default('lk');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('status_kawin');
            $table->enum('berkebutuhan_khusus', ['ya', 'tidak'])->default('tidak');
            $table->string('hubungan'); // hubungan saksi dengan pihak 1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saksis');
    }
};
