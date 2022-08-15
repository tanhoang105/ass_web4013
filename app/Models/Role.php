<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles' ;
    protected $fillable  = ['id' , 'ten_role' , 'mo_ta_role' , 'trash_role' , 'created_at' , 'updated_at'];

    public function list(){
        $query =  DB::table($this->table)
                ->where('trash_role' , '=' , 0)
                ->get();
        $list = $query;
        return $list;
    }
}
