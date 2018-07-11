<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History_topup extends Model
{
    protected $table = 'history_topups';
    protected $fillable = [
    	'pelanggan_id', 'user_id', 'saldo', 'nominal'
    ];

    public function pelanggan()
    {
        return $this->belongsTo('App\Pelanggan','pelanggan_id');
    }

}
