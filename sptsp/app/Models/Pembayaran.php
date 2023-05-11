<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;


    protected $fillable = [
        'perkara_id',
        'jenis_pembayaran',
        'pemasukan',
        'pengeluaran',
        'sisa'
    ];

    public function perkara():BelongsTo {
        return $this->belongsTo(Perkara::class);
    }

    public function isPemasukan() {
        return $this->pemasukan != 0;
    }
}
