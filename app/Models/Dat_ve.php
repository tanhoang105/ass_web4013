<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dat_ve extends Model
{
    use HasFactory;
    protected $table = 'dat_ve' ;
    protected $fillable = ['id' ,'ma_ve' , 've_id'  , 'kh_id' , 'mo_ta_dat_ve' , 'trash_dat_ve' , 'created_at'  , 'updated_at'] ;
}
