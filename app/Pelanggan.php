<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table ='pelanggan';
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];
}
