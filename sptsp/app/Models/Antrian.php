<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Antrian extends Model
{
    use HasFactory;

    protected $fillable = [
        'perkara_id',
        'nomor_antrian',
        'sidang_ke',
        'agenda',
        'ruang_sidang',
        'km_pp_jsp',
        'status',
    ];

    public function perkara(): BelongsTo
    {
        return $this->belongsTo(Perkara::class);
    }

    public function strStatus()
    {
        $listStatus = [
            'Baru',
            'Diterima',
            'Dipanggil',
            'Sedang Sidang',
            'Selesai Sidang',
            'Pass / Lewat',
        ];
        $str = $listStatus[$this->status];
        if (!$str) {
            return '';
        } else {
            return $str;
        }
    }
}
