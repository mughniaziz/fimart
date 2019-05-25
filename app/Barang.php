<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //

    public function categories()
    {
        return $this->hasMany(Kategori::class);
    }

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }
}
