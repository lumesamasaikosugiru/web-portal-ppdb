<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $fillable = [ //penggunaan atribut $fillable daripada $guarded sangat disarankan!
        "name",
        "url_berkas",
        "id_biodata",
    ];

    public function biodatas(): BelongsTo
    {
        return $this->belongsTo(Biodata::class);
    }
}
