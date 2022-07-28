<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loai_mb;
use Illuminate\Http\Request;

class LoaiMayBayController extends Controller
{
    protected $v;
    protected $loai_mb ;
    public function __construct()
    {
        $this->v = [];
        $this->loai_mb =  new Loai_mb();
    }
    public function index(){

        // gọi hàm list bên loại mb model 
        return view('admin.home.loaimaybay.index' , $this->v);
    }
}
