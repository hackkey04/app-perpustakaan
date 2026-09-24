<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'judul', 'nim', 'email', 'nomor_telepon', 'alamat', 'status',
    ];
}
