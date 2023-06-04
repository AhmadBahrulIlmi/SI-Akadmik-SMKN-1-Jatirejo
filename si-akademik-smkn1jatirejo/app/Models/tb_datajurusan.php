<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_datajurusan extends Model
{
    protected $table = 'tb_jurusan';
    protected $guarded = [];
    protected $primaryKey = 'id_jurusan';
    protected $keyType = 'string';
}