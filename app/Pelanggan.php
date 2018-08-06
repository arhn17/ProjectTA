<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
	protected $table = 'pelanggans';
    protected $fillable = [
        'id', 'user_id', 'nama', 'alamat', 'telepon', 'saldo', 'reg_date', 'tanggal_lahir'
    ];
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function history_topup()
    {
        return $this->hasMany('App\History_topup','pelanggan_id');
    }
}


