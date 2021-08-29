<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $fillable  = [
        'hinhAnh','tenSanPham','gia','kichThuoc'
    ];
}
