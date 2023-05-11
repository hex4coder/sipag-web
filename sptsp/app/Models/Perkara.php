<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perkara extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_perkara',
        'jenis_perkara_id',
        'pihak1',
        'pihak2',
        'saksi1',
        'saksi2',
        'saksi3',
        'tahapan_akhir',
        'tanggal_registrasi'
    ];


    public function jenis_perkara(): BelongsTo
    {
        return $this->belongsTo(JenisPerkara::class);
    }

    public function saksi(): HasMany
    {
        return $this->hasMany(Saksi::class);
    }

    public function antrian(): HasMany
    {
        return $this->hasMany(Antrian::class);
    }

    public function notification(): HasMany {
        return $this->hasMany(Notification::class);
    }

    public function transaksi_pembayaran() : HasMany {
        return $this->hasMany(Pembayaran::class);
    }


    public function produk() : HasMany {
        return $this->hasMany(Produk::class);
    }
}
