<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoginModel;

class tb_siswa extends Model
{
    //use HasFactory;
    protected $table = 'tb_siswa';
    protected $guarded = [];
    protected $primaryKey = 'id_siswa';
    protected $keyType = 'string';
    public function tb_kelas()
    {
        return $this->belongsTo('App\Models\tb_kelas', 'id_kelas', 'id_kelas');
    }
    public function login()
    {
        return $this->belongsTo('App\Models\LoginModel', 'id_user', 'id_user');
    }
    public function wali()
    {
        return $this->hasOne('App\Models\tb_walimurid', 'id_siswa', 'id_siswa');
    }
}