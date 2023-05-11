<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prasyarat extends Model
{
    use HasFactory;


    protected $fillable = [
        'jenis_perkara_id',
        'syarat'
    ];

    /**
     * Get the jenis_perkara that owns the Prasyarat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis_perkara(): BelongsTo
    {
        return $this->belongsTo(JenisPerkara::class);
    }
}
