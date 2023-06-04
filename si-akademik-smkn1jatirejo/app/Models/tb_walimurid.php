<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_walimurid extends Model
{
    //use HasFactory;
    protected $table = 'tb_wali_murid';
    protected $guarded = [];
    protected $primaryKey = 'id_wali';
    protected $keyType = 'string';

    public function tb_siswa()
    {
        return $this->belongsTo('App\Models\tb_siswa', 'id_siswa', 'id_siswa');
    }
}