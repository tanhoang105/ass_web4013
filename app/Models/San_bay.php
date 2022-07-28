<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class San_bay extends Model
{
    use HasFactory;
    protected $table = 'san_bay';
    protected $fillable  = ['id' , 'ten_sb' , 'dia_chi_sb' , 'anh_sb' , 'mo_ta_sb' , 'loai_sb' , 'trash_sb' , 'created_at' , 'updated_at'];


    public function list_sb($param = null, $pagination = false , $perPage = null){
        if(!$pagination){

            $query = DB::table($this->table)->select($this->fillable)->get();
            $list_sb = $query;
           
        }else {
            $query = DB::table($this->table)->select($this->fillable);
            $list_sb = $query->paginate($perPage);
        }
        // dd($list_sb);
        return  $list_sb;

    }
}
