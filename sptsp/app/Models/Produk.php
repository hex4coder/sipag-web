<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'perkara_id',
        'tahapan_akhir',
    ];


    public function perkara() : BelongsTo {
        return $this->belongsTo(Perkara::class);
    }
}
