<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class San_bay extends Model
{
    use HasFactory;
    protected $table = 'san_bay';
    protected $fillable  = ['id', 'ten_sb', 'dia_chi_sb', 'anh_sb', 'mo_ta_sb', 'loai_sb', 'trash_sb', 'created_at', 'updated_at'];


    public function list_sb($param = null, $pagination = true, $perPage = null)
    {
        if (!$pagination) {
            // không phân trang 
            $query = DB::table($this->table)
                ->select($this->fillable)
                ->where('trash_sb', '=', 0)
                ->orderByDesc('id');
            if ($param['keyword']) {
                $query = $query->where(function ($q) use ($param) {
                    $q->orwhere('ten_sb', 'like', '%' . $param['keyword'] . '%');
                    $q->orwhere('dia_chi_sb', 'like', '%' . $param['keyword'] . '%');
                });
            }
            $list_sb = $query->get();
        } else {
            // dd(121);
            $query = DB::table($this->table)
                ->select($this->fillable)
                ->where('trash_sb', '=', '0')
                ->orderByDesc('id');
            if (!empty($param['keyword'])) {
                $query = $query->where(function ($q) use ($param) {
                    $q->orwhere('ten_sb', 'like', '%' . $param['keyword'] . '%');
                    $q->orwhere('dia_chi_sb', 'like', '%' . $param['keyword'] . '%');
                });
            }

            $list_sb = $query->paginate($perPage);
        }
        // dd($list_sb);
        return  $list_sb;
    }

    public function add_sanbay($params)
    {
        if (!empty($params)) {
            // nếu tồn tại thì thêm
            $data = array_merge($params['cols'] , [
                'created_at' => date('Y-m-d h:i:s')
            ]);
            $query = DB::table($this->table)
                ->insertGetId($data);
            return $query;
        } else {
            Session::flash('error', 'Dữ liệu không hợp lệ');
        }
    }
}
