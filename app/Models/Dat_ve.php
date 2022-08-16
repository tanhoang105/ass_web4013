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
    protected $fillable = ['id', 'ma_ve', 've_id', 'kh_id', 'ngay_het_han', 'mo_ta_dat_ve', 'trash_dat_ve', 'created_at', 'updated_at'];

    public function list_dv($pagination = true, $params = null, $perpage = null)
    {
        if ($pagination) {
            // phân trang 
            $query  = DB::table($this->table)
                ->join('ve', 've.id', '=', $this->table . '.ve_id')
                ->join('users', 'users.id',  '=', $this->table . '.kh_id')
                ->select($this->table . '.*', 've.*', 'users.*')
                ->where($this->table . '.trash_dat_ve', '=', 0)
                ->orderByDesc($this->table . '.id');
            if (!empty($params['keyword'])) {
                $query =  $query->where(function ($q) use ($params) {
                    $q->orWhere($this->table . '.ma_ve', 'like', '%' . $params['keyword']  . '%');
                });
            }
            $list_dv = $query->paginate($perpage)->withQueryString();
            // dd($list_dv[0]);
        } else {
            $query  = DB::table($this->table)
                ->join('ve', 've.id', '=', $this->table . '.ve_id')
                ->join('users', 'users.id',  '=', $this->table . '.kh_id')
                ->select($this->table . '.*', 've.*', 'users.*')
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

    public function add_dat_ve($params)
    {
        $data = array_merge($params['cols'], [
            'ma_dat_ve' => 'DV' . date('Ymdhis')
        ]);
        // dd($data);
        $res =  DB::table($this->table)
            ->insertGetId($data);
        return $res;
    }


    public function loc_dat_ve()
    {
        $query = DB::table($this->table)
            ->where('ngay_het_han', '<', date('Y-m-d h:i:s'))
            ->update(['trash_dat_ve' => 1]);
        return $query;
    }

    public function ls_datve($pagination = true, $params = null, $perpage = null , $kh_id  = null)
    {
        if ($pagination) {
            // phân trang 
            $query  = DB::table($this->table)
                ->join('ve', 've.id', '=', $this->table . '.ve_id')
                ->join('users', 'users.id',  '=', $this->table . '.kh_id')
                ->select($this->table . '.*', 've.*', 'users.*')
                ->where($this->table . '.trash_dat_ve', '=', 0)
                ->where($this->table . '.kh_id' , '=' , $kh_id )
                ->orderByDesc($this->table . '.id');
            if (!empty($params['keyword'])) {
                $query =  $query->where(function ($q) use ($params) {
                    $q->orWhere($this->table . '.ma_ve', 'like', '%' . $params['keyword']  . '%');
                });
            }
            $list_dv = $query->paginate($perpage)->withQueryString();
            // dd($list_dv[0]);
        } else {
            $query  = DB::table($this->table)
                ->join('ve', 've.id', '=', $this->table . '.ve_id')
                ->join('users', 'users.id',  '=', $this->table . '.kh_id')
                ->select($this->table . '.*', 've.*', 'users.*')
                ->where($this->table . '.trash_dat_ve', '=', 0)
                ->where($this->table . '.kh_id' , '=' , $kh_id )
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
}
