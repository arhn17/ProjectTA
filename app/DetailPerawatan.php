<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPerawatan extends Model
{
	protected $table = 'detail_perawatans';
    protected $fillable = [
        'pesanan_id', 'therapist_id', 'service_id', 'ruangan_id', 'paket_id', 'status_perawatan'
    ];

    public function transaksi ()
    {
    	return $this->belongsTo('App\Transaksi', 'pesanan_id', 'id');
    }

    public function therapist ()
    {
    	return $this->belongsTo('App\Therapist', 'therapist_id', 'id');
    }

    public function service ()
    {
    	return $this->belongsTo('App\Service', 'service_id', 'id');
    }

    public function paket ()
    {
    	return $this->belongsTo('App\Paket', 'paket_id', 'id');
    }

    public function ruangan ()
    {
    	return $this->belongsTo('App\Ruangan', 'ruangan_id', 'id');
    }
}

