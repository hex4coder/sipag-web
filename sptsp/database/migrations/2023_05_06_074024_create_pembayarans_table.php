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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Perkara::class)->constrained();
            $table->string('jenis_pembayaran');
            $table->unsignedBigInteger('pemasukan');
            $table->unsignedBigInteger('pengeluaran');
            $table->unsignedBigInteger('sisa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
