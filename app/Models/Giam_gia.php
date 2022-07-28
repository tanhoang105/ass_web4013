<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giam_gia extends Model
{
    use HasFactory;
    protected $table = 'giam_gia' ;
    protected  $fillable = ['ma_giam_gia' , 'menh_gia' , 'chuyen_bay_id' , 'trash_giam_gia' , 'ngay_het_han' , 'created_at' , 'updated_at'];
}
