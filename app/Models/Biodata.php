<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Biodata extends Model
{

    protected $guarded = []; //atribut guarded ini tidak disarankan untuk penggunaan publik (Mass Assignment Vulnerability) untuk UAS mah okelah mwhehe

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function registrations(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

}
