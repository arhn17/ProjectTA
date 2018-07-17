<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
	protected $table = 'detail_pakets';
    protected $fillable = [
        'paket_id', 'service_id'
    ];
}

