<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table ='transaksi';
    protected $fillable = [
        'id_barang',
        'id_pelanggan',
        'jumlah',
        'total_pesanan',
        'tanggal',
    ];
    public function barang()
    {
        return $this->belongsTo('App\Barang','id_barang');
    }
    public function pelanggan()
    {
        return $this->belongsTo('App\Pelanggan','id_pelanggan');
    }
}
