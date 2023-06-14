<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_datamapel extends Model
{
    protected $table = 'tb_mapel';
    protected $guarded = [];
    protected $primaryKey = 'id_mapel';
    protected $keyType = 'string';
    public function nilai()
    {
        return $this->hasMany('App\Models\tb_datanilai', 'id_mapel', 'id_mapel');
    }
    public function login()
    {
        return $this->belongsTo('App\Models\LoginModel', 'id_user', 'id_user');
    }
}