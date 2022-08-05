<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SlideController extends Controller
{
    protected $v;
    protected $slide;
    public function __construct()
    {
        $this->v = [];
        $this->slide = new Slide();
    }

    public function index(Request $request)
    {
        $this->v['title_page'] = 'Trang quản trị slide';
        $this->v['exsParams'] = $request->all();
        $list = $this->slide->list_slide($this->v['exsParams'], 2);
        $this->v['list_slide'] = $list;
        // dd($list);
        return view('admin.home.slide.index', $this->v);
    }

    public function delete_Slide($id)
    {
        if (!empty($id)) {
            // dd($id);

            $res = $this->slide->delete_slide($id);
            // dd($res);
            if ($res > 0) {
                Session::flash('success', 'Xóa thành công');
            } else {
                Session::flash('error', 'Xóa không thành công');
            }
            return redirect()->route('route_BE_Admin_List_Slide');
        }
    }

    public function add_Slide(SlideRequest $request)
    {
        $this->v['title_page'] = 'Trang quản trị slide';

        if ($request->isMethod('post')) {

            $params = [];
            if ($request->file('anh_slide')) {
                $file = $request->file('anh_slide');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/assets/admin/img_slide'), $filename);
            }
            $params['cols'] = array_map(function ($item) {
                if ($item == '') {
                    $item  = null;
                }
                if (is_string($item)) {
                    $item = trim($item);
                }

                return $item;
            }, $request->post());
            unset($params['cols']['_token']);
            $params['cols']['anh_slide'] = $filename;
            $res =  $this->slide->add_slide($params);
            if ($res > 0) {
                Session::flash('success', 'Thêm thành công');
                return redirect()->route('route_BE_Admin_List_Slide');
            } else {
                Session::flash('errors', 'Thêm không thành công');
                return back();
            }
        }

        return view('admin.home.slide.add', $this->v);
    }

    public function detail_Slide($id, Request $request)
    {
        $this->v['title_page'] = 'Trang quản trị slide';
        if (!empty($id)) {
            $request->session()->put('id', $id);
            $res = $this->slide->detail_slide($id);
            if (!empty($res)) {
                $this->v['detail_slide'] = $res;
                // dd($this->v['detail_slide']);
            }
        }
        return view('admin.home.slide.detail', $this->v);
    }

    public function update_Slide(SlideRequest $request)
    {
        $id  = session('id');
        // dd($id);

        // dd($request->post());
        $params = [];
        if ($request->file('anh_slide')) {
            $file = $request->file('anh_slide');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/assets/admin/img_slide'), $filename);
            
        }

        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item  =  null;
            }
            if(is_string($item)) {
                $item  = trim($item);
            }
            
            return $item;
        }, $request->post());
        // dd($params);
        unset($params['cols']['_token']);
        if (!empty($id)) {
            $params['cols']['id'] = $id;
        }
        if(!empty($filename)){
            $params['cols']['anh_slide'] = $filename;
        }
        $res =  $this->slide->update_slide($params);
        // dd($res);
        if($res > 0){
            Session::flash('success', 'Cập nhập thành công');
            return redirect()->route('route_BE_Admin_List_Slide');
            
        }else {
            Session::flash('error' , 'Cập nhập không thành công');
            return back();
        }
    }
}
