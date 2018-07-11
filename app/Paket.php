<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
	protected $table = 'pakets';
    protected $fillable = [
        'nama_paket', 'harga_paket'
    ];
}