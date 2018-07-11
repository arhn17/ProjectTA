<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $table = 'services';
    protected $fillable = [
        'nama_services', 'tarif_member', 'tarif_normal', 'level', 'durasi'
    ];
}