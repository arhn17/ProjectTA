<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
	protected $table = 'perawatan';
    protected $fillable = [
        'ruangan_id', 'tarif_member', 'tarif_normal', 'jenis_perawatan'
}