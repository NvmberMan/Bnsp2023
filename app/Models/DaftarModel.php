<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarModel extends Model
{
    use HasFactory;

    protected $table = "daftar";

    protected $fillable = [
        "nama_beasiswa"
    ];

    // protected $timestamps = false;
}
