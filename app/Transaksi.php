<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	protected $table = 'transaksis';
    protected $fillable = [
        'pelanggan_id', 'user_id', 'diskon_id', 'service', 'therapist', 'ruangan', 'total'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id','user_id');
    }

    public function detail_perawatan()
    {
        return $this->hasMany('App\DetailPerawatan','transaksi_id', 'id');
    }

    public function pelanggan ()
    {
        return $this->belongsTo('App\Pelanggan', 'pelanggan_id', 'id');
    }

    public function diskon()
    {
        return $this->belongsTo('App\Diskon', 'diskon_id', 'id');
    }
}

