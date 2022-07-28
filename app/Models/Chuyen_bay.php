<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Chuyen_bay extends Model
{
    use HasFactory;
    protected $table = 'chuyen_bay';
    protected $fillable = ['id', 'ma_cb', 'ngay_di', 'sb_id', 'gio_di', 'gio_den', 'mb_id', 'mo_ta_cb', 'trash_cb', 'created_at', 'updated_at'];


    public function list_cb($param = [], $perPage = null)
    {
        $query = DB::table($this->table)
            ->join('may_bay', 'may_bay.id', '=', $this->table . '.mb_id')
            ->join('san_bay', 'san_bay.id', '=', $this->table . '.sb_id')
            ->select($this->table . '.*', 'san_bay.*' , 'may_bay.*')
            ->where($this->table . '.trash_cb', '=', 0)
            ->orderByDesc($this->table. '.id');
        if (!empty($param['keyword']) ) {
            $query  = $query->where(function ($q) use ($param) {
                $q->orWhere('ma_cb', 'like', '%' . $param['keyword'] . '%');
            });
        }

        $list = $query->paginate($perPage);

        return $list;
    }

    public function saveNew($param)
    {
        $data = array_merge($param['cols'], [
            // đây là mảng bổ sung
            // ví dụ ở đây chúng ta mã hóa mật khẩu nên cần ghi đề lại mật khẩu cũ bằng mật khẩu mã hóa
            // 'password' => Hash::make($param['cols']['password']) // mx hóa mk
            'created_at' =>  date('Y-m-d H:i:s')
        ]);

        // dd($data);
        $res = DB::table($this->table)->insertGetId($data);
        /// insertGetId sẽ trả về id của bản ghi vừa mới đc insert
        return $res;
    }

    public function loadOne($ma_cb, $param = null)
    {
        $query = DB::table($this->table)->where('ma_cb', '=', $ma_cb);
        $obj = $query->first();

        return $obj;
    }


    public function update_cb($ma_cb, $param)
    {
        $data = array_merge($param['cols'], [
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        $query = DB::table($this->table)
            ->where('ma_cb', '=', $ma_cb)
            ->update($data);

        return $query;
    }

    public function delete_cb($ma_cb)
    {
        $query = DB::table($this->table)->where('ma_cb', '=', $ma_cb);
        $data = [
            'trash_cb' => 1
        ];
        $query = $query->update($data);
        $cb_delete = $query;
        return  $cb_delete;
    }
}
