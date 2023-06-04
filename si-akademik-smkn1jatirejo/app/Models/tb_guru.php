<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_guru extends Model
{
    //use HasFactory;
    protected $table = 'tb_guru';
    protected $guarded = [];
    protected $primaryKey = 'id_guru';
    protected $keyType = 'string';
}