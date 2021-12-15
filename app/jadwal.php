<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table='jadwal_kegiatan';
    protected $fillable=['users_id', 'nama_kegiatan', 'ketua_pelaksana', 'tanggal', 'tempat', 'nomer_telp', 'kak'];
}
