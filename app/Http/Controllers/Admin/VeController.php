<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VeRequest;
use App\Models\Chuyen_bay;
use App\Models\Ve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VeController extends Controller
{


    protected $v;
    protected $ve;
    protected $chuyen_bay;
    public function __construct()
    {
        $this->v = [];
        $this->ve =  new Ve();
        $this->chuyen_bay = new Chuyen_bay();
    }

    public function index(Request $request)
    {
        $this->v['title_page'] =  'Trang quản trị vé';
        $this->v['extParams'] = $request->all();
        $list_ve = $this->ve->list_ve($this->v['extParams'], true, 2);
        $this->v['list_ve'] = $list_ve;
        // dd($list_ve);
        return view('admin.home.ve.index', $this->v);
    }

    public function delete_Ve($ma_ve)
    {
        if (!empty($ma_ve)) {
            $res = $this->ve->delete_ve($ma_ve);
            if ($res >  0) {
                Session::flash('success', 'Xóa thành công');
            } else {
                Session::flash('error', 'Xóa không thành công');
            }
            return redirect()->route('route_BE_Admin_List_Ve');
        }
    }

    public function add_Ve(VeRequest $request)
    {

        $this->v['title_page'] =  "Trang quản lý vé  máy bay";
        $this->v['exParam'] = $request->all();
        $this->v['list_chuyen_bay'] = $this->chuyen_bay->list_cb($this->v['exParam'] , false );
        // dd($this->v['list_chuyen_bay']);

        if ($request->isMethod('post')) {
            $params = [];
            $params['cols'] = array_map(function ($item) {
                if ($item == '') {
                    $item = null;
                }
                if (is_string($item)) {
                    $item = trim($item);
                }
                return $item;
            }, $request->post());
            unset($params['cols']['_token']);
            $res = $this->ve->add_ve($params);
            if ($res >  0) {
                Session::flash('success', "thêm thành công");
                return redirect()->route('route_BE_Admin_List_Ve');
            } else {
                Session::flash('error', 'Thêm không thành công');
            }
        }
        return view('admin.home.ve.add' , $this->v);
    }


    public function  detail_Ve($ma_ve , Request $request){
        $this->v['title_page'] =  "Trang quản chi tiết vé máy bay";
        $this->v['exParam'] = $request->all();
        $this->v['list_chuyen_bay'] = $this->chuyen_bay->list_cb($this->v['exParam'] , false );
        $request->session()->put('ma_ve' , $ma_ve);
        $res = $this->ve->detail_ve($ma_ve);

        // dd($res);
        if(!empty($res)){
             $this->v['detail_ve'] = $res;  
            return view('admin.home.ve.detail' , $this->v);
        }else{
            Session::falsh('error', 'Cập nhập xảy ra lỗi');
            return redirect()->route('route_BE_Admin_List_Ve');
        }
    }

    public function update_Ve(VeRequest $request){
        $ma_ve = session('ma_ve');
        // dd($ma_ve);
        $params = [];
        $params['cols'] = array_map(function($item){
            if($item == ''){
                $item =  null;
            }
            if(is_string($item)){
                $item = trim($item);
            }
            return $item;
        } ,$request->post());
        $res =  $this->ve->update_ve($ma_ve , $params);
        if($res > 0){
            Session::flash('success' , 'Cập nhập thành công');
            return redirect()->route('route_BE_Admin_List_Ve');
        }else  {
            Session::flash('error' , 'Cập nhập không thành công');
            return back();
        }
    }

    // xóa hết những vé quá hạn
    public function loc_Ve()
    {
        $res  = $this->ve->loc_ve();

        if ($res > 0) {
            Session::flash('success', 'Lọc thành công');
        } else {
            Session::flash('error', 'Lọc không thành công');
        }
        return back();
    }



}
