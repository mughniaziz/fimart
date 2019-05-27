<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function keranjangs()
    {
        return $this->belongsToMany(Keranjang::class);
    }
}
