<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Ve extends Model
{
    use HasFactory;
    protected $table = 've';
    protected $fillable = ['id', 'ma_ve', 'cb_id', 'so_ghe', 'gia_ve', 'loai_ve', 'khu_hoi', 'mo_ta_ve', 'trash_ve', 'created_at', 'updated_at'];

    public function list_ve($param =  null, $pagination = true, $perPage =  null , $type  = null)
    {
        if (!$pagination) {

            $query =  DB::table($this->table)
                ->join('chuyen_bay', 'chuyen_bay.id', '=', $this->table . '.cb_id')
                ->select($this->table . '.*', 'chuyen_bay.*')
                ->where('trash_ve', '=', 0)
                ->get();
            
            $list = $query;
        } else {
            $query =  DB::table($this->table)
                ->join('chuyen_bay', 'chuyen_bay.id', '=', $this->table . '.cb_id')
                ->select($this->table . '.*', 'chuyen_bay.*')
                ->where('trash_ve', '=', 0);

            if(!empty($param['keyword'])){
                $query = $query->where(function($q) use ( $param){
                     $q->orwhere('ma_ve' , 'like' , '%' . $param['keyword'] . '%');
                }); 
            }    
            $list = $query->paginate($perPage);
        }

        return $list;
    }

    public function delete_ve($ma_ve){
        $data = [
            'trash_ve' => 1 ,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $query  = DB::table($this->table)
                ->where('ma_ve' , '=' , $ma_ve)
                ->update($data);
        return $query;   

    }

    public function add_ve($param , ){
        $data = array_merge($param['cols'] , [
            'created_at' => date('Y-m-d H:i:s')
        ]);
        
        $query = DB::table($this->table)->insertGetId($data);
        return $query;
    }


    public function detail_ve($ma_ve){
        if(!empty($ma_ve)){
            $query = DB::table($this->table)
                    ->where('ma_ve' , '=' , $ma_ve)
                    ->first();
            return $query;        
        }
    }
    

    public function update_ve($ma_ve ,$params){
       
        $dataUpdate = [];
        foreach ($params['cols'] as $colname =>  $val) {
          
            if (in_array($colname, $this->fillable)) {
                $dataUpdate[$colname] = (strlen($val) == 0) ? null : $val;
            }
        }

        $res = DB::table($this->table)
            ->where('ma_ve', '=', $ma_ve)
            ->update($dataUpdate);
        return $res;
    }



}
