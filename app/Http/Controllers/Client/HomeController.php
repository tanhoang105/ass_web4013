<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Chuyen_bay;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class HomeController extends Controller
{
    protected $v;
    protected $chuyenbay;
    
    public function __construct()
    {
        $this->v = [];
        $this->chuyenbay =  new Chuyen_bay();
    
    }


    // hàm giúp reder data ra 
    public function list_ChuyenBay(Request $request){
        $this->v['title'] = 'Đặt lịch máy bay';
        $this->v['extParams'] = $request->all();
        $list_chuyenbay = $this->chuyenbay->list_cb($this->v['extParams'] , false );
        
        $this->v['list_chuyenbay'] = $list_chuyenbay;


        return view('client.block.main', $this->v);
    }
}
