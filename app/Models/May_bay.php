<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class May_bay extends Model
{
    use HasFactory;
    protected $table = 'may_bay';
    protected $fillable  = ['id', 'so_hieu_mb', 'ma_loai_mb_id', 'anh_mb', 'mo_ta_mb', 'trash_mb', 'created_at', 'updated_at'];

    public function list_mb($param = null, $pagination = true, $perPage = null)
    {
        if (!$pagination) {

            $query = DB::table($this->table)->select($this->fillable)->orderByDesc('id')->get();
            $list_mb = $query;
        } else {
            $query = DB::table($this->table)
                ->join('loai_mb', 'loai_mb.id', '=', $this->table . '.ma_loai_mb_id')
                ->select($this->table . '.*', 'loai_mb.*')
                ->where($this->table . '.trash_mb', '=', 0)->orderByDesc($this->table . '.id');
            if (!empty($param['keyword'])) {
                $query = $query->where(function ($q) use ($param) {
                    $q->orwhere('so_hieu_mb', 'like', '%' . $param['keyword'] . '%');
                });
            }
            $list_mb = $query->paginate($perPage);
        }

        // dd($list_sb);
        return  $list_mb;
    }


    public function saveNew($param, $filename = null)
    {



        $data  = array_merge($param['cols'], [
            'created_at' => date('Y-m-d H:i:s'),
            'anh_mb' => $filename

        ]);

        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }


    public function delete_mb($so_hieu_mb)
    {

        $query = DB::table($this->table)->where('so_hieu_mb', '=', $so_hieu_mb);
        $data = [
            'trash_mb' => 1
        ];
        $query = $query->update($data);
        $cb_delete = $query;
        return  $cb_delete;
    }

    public function detail_mb($so_hieu_mb)
    {
        $query  = DB::table($this->table)
            ->where('so_hieu_mb', '=', $so_hieu_mb)
            ->first();
        // dd($query);
        return $query;
    }

    public function  update_mb($so_hieu_mb, $param , $filename = null)
    {
        $data = array_merge($param['cols'], [
            'updated_at' => date('Y-m-d H:i:s'),
            
        ]); 
        if(!empty($filename)){

            $data = array_merge($param['cols'] , [
                'anh_mb'=> $filename
            ]);
        }
        $query =  DB::table($this->table)
            ->where('so_hieu_mb', '=', $so_hieu_mb)
            ->update($data);
        return $query;
    }
}
