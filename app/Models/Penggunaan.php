<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{
    protected $fillable = [
        'tahun',
        'bulan',
        'meter_awal',
        'meter_akhir',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function tagihan()
{
    return $this->hasOne(Tagihan::class);
}

}
