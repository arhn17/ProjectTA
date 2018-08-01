<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
	protected $table = 'detail_pakets';
    protected $fillable = [
        'paket_id', 'service_id'
    ];

    public function paket ()
    {
    	return $this->belongsTo('App\Paket', 'paket_id', 'id');
    }

    public function service ()
    {
    	return $this->belongsTo('App\Service', 'service_id', 'id');
    }
}

