<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Slide extends Model
{
    use HasFactory;
    protected $table = 'slide';
    protected $fillable = ['id', 'ten_slide', 'anh_slide', 'mo_ta_slide', 'trash_slide', 'created_at', 'updated_at'];

    public function list_slide($params, $perpage)
    {
        $query = DB::table($this->table)
            ->where('trash_slide', '=', 0);
        if (!empty($params['keyword'])) {
            $query  =  $query->where(function ($q) use ($params) {
                $q->orwhere('ten_slide', 'like', '%' . $params['keyword'] . '%');
            });
        }
        $list  = $query->paginate($perpage);
        return $list;
    }

    public function delete_slide($id)
    {
        $data  = [
            'trash_slide' => 1,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $query  = DB::table($this->table)
            ->where('id', '=', $id)
            ->update($data);
        // dd($query);
        return $query;
    }

    public function add_slide($params)
    {
        $data = array_merge($params['cols'], [
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $query = DB::table($this->table)->insertGetId($data);
        return $query;
    }
}
