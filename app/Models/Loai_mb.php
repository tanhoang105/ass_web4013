<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Node\FunctionNode;

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
                ->orderByDesc('id')
                ->get();
            $list_loai_mb =  $query;
        } else {
            $query = DB::table($this->table)
                ->select($this->fillable)
                ->where('trash_loai_mb', '=', 0)
                ->orderByDesc('id');
            if (!empty($param['keyword'])) {

                $query = $query->where(function ($q) use ($param) {
                    $q->orwhere('ma_loai_mb', 'like', '%' . $param['keyword'] . '%');
                    $q->orwhere('ten_loai_mb', 'like', '%' . $param['keyword'] . '%');
                });
            }
            $list_loai_mb =  $query->paginate($perPage);
        }
        return $list_loai_mb;
    }

    public function delete_loai_mb($id)
    {
        $data = [
            'trash_loai_mb' => 1,

        ];
        $query = DB::table($this->table)
            ->where('id', '=', $id)
            ->update($data);

        return $query;
    }

    public function saveNew($param, $filename = null)
    {
        if (!empty($filename)) {
            $data =  array_merge($param['cols'], [
                'created_at' =>  date('Y-m-d H:i:s'),
                'anh_loai_mb' => $filename
            ]);
        } else {

            $data =  array_merge($param['cols'], [
                'created_at' =>  date('Y-m-d H:i:s')
            ]);
        }

        $query = DB::table($this->table)
            ->insertGetId($data);

        return $query;
    }

    public function detail_loai_mb($id)
    {
        $query =  DB::table($this->table)
            ->where('id', '=', $id)
            ->first();
        return $query;
    }

    public function update_loai_mb($id, $param, $filename = null)
    {
        if (!empty($filename)) {
            $data = array_merge($param['cols'], [
                'updated_at' => date('Y-m-d H:i:d'),
                'anh_loai_mb' => $filename

            ]);
        } else {

            $data = array_merge($param['cols'], [
                'updated_at' => date('Y-m-d H:i:d')
            ]);
        }


        $query =  DB::table($this->table)
            ->where('id', '=', $id)
            ->update($data);
        return $query;
    }
}
