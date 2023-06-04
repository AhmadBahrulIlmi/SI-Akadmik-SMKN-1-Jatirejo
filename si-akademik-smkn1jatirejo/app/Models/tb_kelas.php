<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kelas extends Model
{
    protected $table = 'tb_kelas';
    protected $guarded = [];
    protected $primaryKey = 'id_kelas';
    protected $keyType = 'string';
    public function tb_datajurusan()
    {
        return $this->belongsTo('App\Models\tb_datajurusan', 'id_jurusan', 'id_jurusan');
    }
}