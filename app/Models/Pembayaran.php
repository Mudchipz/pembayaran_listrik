<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'tanggal_bayar',
        'jumlah_bayar',
        
    ];
    public function tagihan()
{
    return $this->belongsTo(Tagihan::class);
}

}
