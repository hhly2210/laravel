<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HosoDiem extends Model
{
    protected $table = 'hosodiem';
    protected $fillable = [
        'ID',
        'IDHocSinh',
        'IDMon',
        'Diem', 
        'ThoiGianCapNhap'
    ];
    use HasFactory;
}
