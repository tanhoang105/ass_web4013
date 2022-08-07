<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanbayRequest;
use App\Models\San_bay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;

class SanBayController extends Controller
{

    protected $v;
    protected $sanbay;

    public function __construct()
    {
        $this->v = [];
        $this->sanbay =  new San_bay();
    }
    public function index(Request $request)
    {
        $this->v['title_page'] = 'Trang quản trị sân bay';
        $this->v['extParams'] = $request->all();
        $list_sb = $this->sanbay->list_sb($this->v['extParams'], true, 2);
        $this->v['list_sb']  = $list_sb;
        return view('admin.home.sanbay.index', $this->v);
    }

    public function add_SanBay(SanbayRequest $request)
    {

        $this->v['title_page'] = 'Trang quản trị máy bay';
        if ($request->isMethod('post')) {
            // nếu ấn submid thì thực hiện 
            $params  = [];
            $params['cols'] = array_map(function ($item) {
                if ($item == '') {
                    $item = null;
                }
                if (is_string($item)) {
                    $item = $item;
                }
                return $item;
            }, $request->post());

            unset($params['cols']['_token']);
            if ($request->file('anh_sb')) {
                $params['cols']['anh_sb'] = $this->uploadFile($request->file('anh_sb'));
            }
            // dd($params);
            $res = $this->sanbay->add_sanbay($params);
            if ($res > 0) {
                // thêm thành công
                Session::flash('success', 'Thêm thành công');
                return redirect()->route('route_BE_Admin_List_San_Bay');
            } else {
                return back()->with('error', "Thêm không thành công");
            }
        }
        return view('admin.home.sanbay.add', $this->v);
    }

    public function detail_SanBay($id, Request $request)
    {
        // dd($id);
        $request->session()->put('id', $id);
        $this->v['title_page'] = 'Trang quản trị sân bay';
        $sb_detail  = $this->sanbay->detail_sanbay($id);
        if (!empty($sb_detail)) {
            $this->v['detail_sb'] = $sb_detail;
            return view('admin.home.sanbay.detail', $this->v);
        } else {
            Session::flash('error', 'Không tìm thấy bản ghi nào ');
            return redirect()->route('route_BE_Admin_List_San_Bay');
        }
    }

    public function update_SanBay(SanbayRequest $request)
    {
        $id  = session('id');
        $params = [];
        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item  = null;
            }
            if (is_string($item)) {
                $item = $item;
            }

            return $item;
        }, $request->post());
        unset($params['cols']['_token']);
        $params['cols']['id'] = $id;
        if ($request->file('anh_sb')) {
            $params['cols']['anh_sb'] = $this->uploadFile($request->file('anh_sb'));
        }
        // dd($params);
        $res  = $this->sanbay->update_sanbay($params);
        if ($res > 0) {
            Session::flash('success', 'Cập nhập thành công');
            return redirect()->route('route_BE_Admin_List_San_Bay');
        } else {
            Session::flash('error', 'Cập nhập không thành công');
            return back();
        }
    }




    public function delete_SanBay($id)
    {
        if (!empty($id)) {
            $res = $this->sanbay->delete_sanbay($id);
            if ($res > 0) {
                Session::flash('success', 'Xóa thành công');
                return back();
            } else {
                Session::flash('error', 'Xóa không thành công');
                return back();
            }
        }
    }

    public function uploadFile($file)
    {
        $filename =  time() . '_' . $file->getClientOriginalName();
        return $file->storeAs('img_sanbay', $filename,  'public');
    }
}
