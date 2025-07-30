<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'id_pelanggan',
        'id_user',
        'daya',
        'tarifperkwh',
        'id_tarif',
    ];
    public function penggunaanListrik()
{
    return $this->hasMany(Penggunaan::class);
}

}
