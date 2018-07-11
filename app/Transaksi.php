<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	protected $table = 'transaksis';
    protected $fillable = [
        'pelanggan_id', 'user_id', 'kategori', 'diskon', 'service', 'therapist', 'ruangan', 'total'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id','user_id');
    }

    public function detail_perawatan()
    {
        return $this->hasMany('App\Detail_perawatan','pesanan_id', 'id');
    }
}

