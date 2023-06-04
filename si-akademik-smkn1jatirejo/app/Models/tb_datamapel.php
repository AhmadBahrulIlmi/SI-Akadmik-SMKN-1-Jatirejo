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

}