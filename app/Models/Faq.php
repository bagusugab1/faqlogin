<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = ['layanan_id', 'bidang_id', 'pertanyaan', 'jawaban'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
}
