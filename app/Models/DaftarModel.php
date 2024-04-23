<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarModel extends Model
{
    use HasFactory;

    protected $table = "daftar";

    protected $fillable = [
        "nama",
        "email",
        "nomor_hp",
        "semester",
        "ipk",
        "pilihan_beasiswa",
        "status_ujian"
    ];

    // protected $timestamps = false;
}
