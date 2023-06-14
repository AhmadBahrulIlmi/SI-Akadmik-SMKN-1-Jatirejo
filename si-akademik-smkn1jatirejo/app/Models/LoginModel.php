<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\tb_siswa;
use App\Models\tb_datamapel;

class LoginModel extends Authenticatable
{
    use HasFactory;
    protected $table = "tb_user";
    protected $primaryKey = "id_user";
    public function siswa()
    {
        return $this->hasOne('App\Models\tb_siswa', 'id_user', 'id_user');
    }
    public function mapel()
    {
        return $this->hasOne('App\Models\tb_datamapel', 'id_mapel', 'id_mapel');
    }
}