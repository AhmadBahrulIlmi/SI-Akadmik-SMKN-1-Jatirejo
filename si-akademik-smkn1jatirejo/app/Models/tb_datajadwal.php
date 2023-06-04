<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_datajadwal extends Model
{
    protected $table = 'tb_jadwal';
    protected $guarded = [];
    protected $primaryKey = 'id_jadwal';
    protected $keyType = 'string';

    public function tb_datajurusan()
    {
        return $this->belongsTo('App\Models\tb_datajurusan', 'id_jurusan', 'id_jurusan');
    }
    public function tb_datamapel()
    {
        return $this->belongsTo('App\Models\tb_datamapel', 'id_mapel', 'id_mapel');
    }
}