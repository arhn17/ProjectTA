<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
	protected $table = 'ruangans';
    protected $fillable = [
        'nama_ruang', 'status'
    ];
}
