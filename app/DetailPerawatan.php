<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_perawatan extends Model
{
	protected $table = 'detail_perawatans';
    protected $fillable = [
        'pesanan_id', 'perawatan_id', 'therapist_id', 'service_id', 'ruangan_id', 'paket_id', 'status_perawatan', 'diskon', 'harga'
    ];
}

