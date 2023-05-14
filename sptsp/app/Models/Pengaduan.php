<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pegawai_id',
        'isi',
        'bukti'
    ];


    public function Pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function url_foto_bukti()
    {
        $newstr = str_replace("public/", "storage/", $this->bukti);
        return asset($newstr);
    }

    public function url_foto_bukti_cetak()
    {
        $newstr = str_replace("public/", "storage/", $this->bukti);
        return $_SERVER['DOCUMENT_ROOT'] . '/' . $newstr;
    }
}
