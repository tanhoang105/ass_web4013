<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Dat_ve extends Model
{
    use HasFactory;
    protected $table = 'dat_ve';
    protected $fillable = ['id', 'ma_ve', 've_id', 'kh_id', 'mo_ta_dat_ve', 'trash_dat_ve', 'created_at', 'updated_at'];

    public function list_dv($pagination = true, $params = null, $perpage = null)
    {
        if ($pagination) {
            // phân trang 
            $query  = DB::table($this->table)
                ->join('ve', 've.id', '=', $this->table . '.ve_id')
                ->join('khach_hang', 'khach_hang.id',  '=', $this->table . '.kh_id')
                ->where($this->table . '.trash_dat_ve', '=', 0)
                ->orderByDesc($this->table . '.id');
            if (!empty($params['keyword'])) {
                $query =  $query->where(function ($q) use ($params) {
                    $q->orWhere('ma_ve', 'like', '%' . $params['keyword']  . '%');
                });
            }
            $list_dv = $query->paginate($perpage);
        } else {
            $query  = DB::table($this->table)
                ->join('ve', 've.id', '=', $this->table . '.ve_id')
                ->join('khach_hang', 'khach_hang.id',  '=', $this->table . '.kh_id')
                ->where($this->table . '.trash_dat_ve', '=', 0)
                ->orderByDesc($this->table . '.id');

            if (!empty($params['keyword'])) {
                $query =  $query->where(function ($q) use ($params) {
                    $q->orWhere('ma_ve', 'like', '%' . $params['keyword']  . '%');
                });
            }
            $list_dv = $query->get();
        }
        return $list_dv;
    }



    public function delete_dv($ma_dv)
    {
        if (!empty($ma_dv)) {
            // dd($ma_dv);
            // nếu có thì thực hiện xóa 
            $data = [
                'trash_dat_ve' =>  1
            ];
            $query = DB::table($this->table)
                ->where('ma_dat_ve', '=', $ma_dv)
                ->update($data);
                // dd(123);
            return $query;
        } else {
            Session::flash('error', 'Xóa không thành công');
            return redirect()->route('route_BE_Admin_List_Dat_Ve');
        }
    }
}
