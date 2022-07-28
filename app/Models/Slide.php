<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $table = 'slide';
    protected $fillable = ['id' , 'ten_slide' , 'anh_slide' , 'mo_ta_slide', 'trash_slide' , 'created_at' , 'updated_at' ];
}
