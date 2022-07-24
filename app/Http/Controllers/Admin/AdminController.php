<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $v;
        
    public function __construct()
    {
        $this->v = [];
    
    }
    public function index(){
        // show ra giao diện admin
        $title_page = 'Trang quản trị';
        $this->v['title_page'] = $title_page;
        return view('admin.home.index' , $this->v);

    }

    public function add(){
        return view('admin.block.add');
    }
}
