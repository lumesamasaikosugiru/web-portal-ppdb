<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        "name",
        "url_berkas",
        "id_biodata",
    ];
}
