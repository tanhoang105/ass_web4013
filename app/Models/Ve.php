<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $table = 've';
    protected $fillable = ['id' , 'ma_ve' , 'cb_id' , 'so_ghe' , 'gia_ve' , 'loai_ve' , 'khu_hoi' , 'mo_ta_ve' , 'trash_ve' , 'created_at' , 'updated_at'];
}
