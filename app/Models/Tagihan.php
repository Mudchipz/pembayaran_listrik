<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
     protected $fillable = [
        'jumlah_tagihan',
        'status',
        'password',
    ];
public function penggunaanListrik()
{
    return $this->belongsTo(Penggunaan::class);
}

public function pembayaran()
{
    return $this->hasOne(Pembayaran::class);
}

}
