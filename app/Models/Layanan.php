<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = ['bidang_id', 'nama_layanan'];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
