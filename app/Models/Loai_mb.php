<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Loai_mb extends Model
{
    use HasFactory;
    protected $table  = 'loai_mb';
    protected $fillable  = ['id', 'ma_loai_mb', 'ten_loai_mb', 'anh_loai_mb', 'mo_ta_mb', 'trash_loai_mb', 'created_at', 'updated_at'];


    public function list_loai_mb($param = null, $pagination = true, $perPage = null)
    {
        if (!$pagination) {
            // không phân trang
            $query = DB::table($this->table)
                ->select($this->fillable)
                ->where('trash_loai_mb', '=', 0)
                ->get();
            $list_loai_mb =  $query;
        } else {
            $query = DB::table($this->table)
                ->select($this->fillable)
                ->where('trash_loai_mb', '=', 0);
            $list_loai_mb =  $query->paginate($perPage);
        }
        return $list_loai_mb;
    }
}
