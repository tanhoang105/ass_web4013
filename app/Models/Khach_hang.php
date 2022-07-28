<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khach_hang extends Model
{
    use HasFactory;
    protected $table = 'khach_hang' ;
    protected $fillable = ['id' , 'ma_kh' , 'ten_kh' , 'anh_kh' , 'email_kh' , 'sdt_kh' , 'dia_chi_kh' , 'mmo_ta_kh' , 'trash_kh' , 'created_at' , 'updated_at'];
} 
