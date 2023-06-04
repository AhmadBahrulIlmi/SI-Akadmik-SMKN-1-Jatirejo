<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_datanilai extends Model
{
    protected $table = 'tb_nilai';
    protected $guarded = [];
    protected $primaryKey = 'id_nilai';
    protected $keyType = 'string';

    public function tb_siswa()
    {
        return $this->belongsTo('App\Models\tb_siswa', 'id_siswa', 'id_siswa');
    }
    public function tb_datamapel()
    {
        return $this->belongsTo('App\Models\tb_datamapel', 'id_mapel', 'id_mapel');
    }
}