<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'perkara_id',
        'notif',
    ];


    public function perkara() : BelongsTo {
        return $this->belongsTo(Perkara::class);
    }
}
