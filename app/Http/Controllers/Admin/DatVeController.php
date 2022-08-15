<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dat_ve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\CssSelector\Node\FunctionNode;

class DatVeController extends Controller
{
    protected $datve;
    protected $v;
    public function __construct()
    {
        $this->v  = [];
        $this->datve = new Dat_ve();
    }

    public function index(Request $request)
    {
        $this->v['title_page'] = 'Trang quản trị đặt vé';
        $this->v['extParams'] = $request->all();
        $list_dv = $this->datve->list_dv(true, $this->v['extParams'], 2);
        $this->v['list_dv'] = $list_dv;
        // dd($list_dv[0]);

        return view('admin.home.datve.index', $this->v);
    }


    public function delete_Dat_Ve($ma_dv)
    {
        if (!empty($ma_dv)) {
            $res = $this->datve->delete_dv($ma_dv);
            // dd($res);
            if ($res > 0) {
                // xóa thành công
                Session::flash('success', 'Xóa thành công');
            } else {
                Session::flash('error', 'Xóa không thành công');
            }
            return back();
        } else {

            Session::flash('error', 'Xóa không thành công');
            return back();
        }
    }


      // xóa hết những ve quá hạn
      public function loc_DatVe()
      {
          $res  = $this->datve->loc_dat_ve();
  
          if ($res > 0) {
              Session::flash('success', 'Lọc thành công');
          } else {
              Session::flash('error', 'Lọc không thành công');
          }
          return back();
      }
}
