<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masukan extends Model
{
    protected $fillable = [
        'nama_pengirim',
        'email_pengirim',
        'pesan',
    ];
}
