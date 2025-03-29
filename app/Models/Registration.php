<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Registration extends Model
{
    protected $guarded = [];//atribut guarded ini tidak disarankan untuk penggunaan publik (Mass Assignment Vulnerability) untuk UAS mah okelah mwhehe
    public function biodatas(): HasMany
    {
        return $this->hasMany(Biodata::class);
    }
}
