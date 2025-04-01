<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Biodata;

class Registration extends Model
{
    public function biodatas(): HasMany
    {
        return $this->hasMany(Biodata::class);
    }
}
