<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Saksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'perkara_id',
        'saksi_ke',
        'nama', 
        'bin',
        'tempat_lahir',
        'tanggal_lahir',
        'jln',
        'dusun',
        'desa',
        'kec',
        'kab',
        'jk',
        'pekerjaan',
        'status_kawin',
        'berkebutuhan_khusus',
        'hubungan',
    ];


    public function perkara(): BelongsTo
    {
        return $this->belongsTo(Perkara::class);
    }
}
