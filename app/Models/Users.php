<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['id', 'name', 'email', 'password', 'role_id'];

    public function list_user($pagination = true, $params = null, $perpage = null)
    {
        if ($pagination) {
            $query =  DB::table($this->table)
                ->join('roles', 'roles.id', '=', $this->table . '.role_id')
                ->select($this->table . '.*', 'roles.*')
                ->where('roles.trash_role', '=', 0)
                ->orderByDesc($this->table . '.id');
            if (!empty($params['keyword'])) {
                $query = $query->where(function ($q) use ($params) {
                    $q->orwhere($this->table . '.name', 'like', '%'  . $params['keyword'] . '%');
                });
            }
            $list = $query->paginate($perpage);
        } else {
            $query =  DB::table($this->table)
                ->join('roles', 'roles.id', '=', $this->table . '.role_id')
                ->select($this->table . '.*', 'roles.*')
                ->where('roles.trash_role', '=', 0)
                ->orderByDesc($this->table . '.id')
                ->get();
            if (!empty($params['keyword'])) {
                $query = $query->where(function ($q) use ($params) {
                    $q->orwhere($this->table . '.name', 'like', '%'  . $params['keyword'] . '%');
                });
            }
            $list = $query;
        }

        return $list;
    }


    public function delete_user($email){
       
        if(!empty($email)){
            $query = DB::table($this->table)
                    ->where('email' , '=' , $email)
                    ->delete();
                    
        }
        return $query;
    }

    public function saveNew($param)
    {
        $data = array_merge($param['cols'], [
            // đây là mảng bổ sung
            // ví dụ ở đây chúng ta mã hóa mật khẩu nên cần ghi đề lại mật khẩu cũ bằng mật khẩu mã hóa
            'password' => Hash::make($param['cols']['password']) // mx hóa mk
        ]);
        $res = DB::table($this->table)->insertGetId($data);
        /// insertGetId sẽ trả về id của bản ghi vừa mới đc insert
        return $res;
    }

    public function update_user($params)
    {
        $dataUpdate = [];
        foreach ($params['cols'] as $colname =>  $val) {
            if ($params['cols'] == 'id') continue;
            if (in_array($colname, $this->fillable)) {
                $dataUpdate[$colname] = (strlen($val) == 0) ? null : $val;
            }
        }
        // dd($params['cols']);

        $res = DB::table($this->table)
            ->where('id', '=', $params['cols']['id'])
            ->update($dataUpdate);
        // dd($res);
        return $res;
    }
}
