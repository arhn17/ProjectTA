<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
	protected $table = 'detail_paket';
    protected $fillable = [
        'paket_id', 'service_id'
    ];
}

