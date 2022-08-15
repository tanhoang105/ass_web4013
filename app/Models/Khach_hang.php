<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Khach_hang extends Model
{
    use HasFactory;
    protected $table = 'khach_hang' ;
    protected $fillable = ['id'  , 'ten_kh' , 'anh_kh' , 'email_kh' , 'sdt_kh' , 'dia_chi_kh' , 'mmo_ta_kh' , 'trash_kh' , 'created_at' , 'updated_at'];
    
    public function save_kh($params) {

        if(!empty($params) ) {
            $data  = array_merge($params , [
                'mo_ta_kh' => date('Ymdhis')
            ]);
            $query =  DB::table($this->table)
                    ->insertGetId($data);
            return $query;        
        }
    }
    
    

} 
