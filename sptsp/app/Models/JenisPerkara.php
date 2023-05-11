<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisPerkara extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
    ];

    /**
     * Get all of the prasyarat for the JenisPerkara
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prasyarat(): HasMany
    {
        return $this->hasMany(Prasyarat::class);
    }

    /**
     * Get all of the perkara for the JenisPerkara
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perkara(): HasMany
    {
        return $this->hasMany(Perkara::class);
    }
}
