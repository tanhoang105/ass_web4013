<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Chuyen_bay;
use App\Models\Dat_ve;
use App\Models\Ve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    protected $v;
    protected $chuyenbay;
    protected $dat_ve;
    protected $ve;

    public function __construct()
    {
        $this->v = [];
        $this->chuyenbay =  new Chuyen_bay();
        $this->dat_ve =  new Dat_ve();
        $this->ve = new Ve();
    }

    public function index(Request $request)
    {
        // show ra giao diện admin
        $this->v['title'] = 'Đặt lịch máy bay';
        $this->v['extParams'] = $request->all();
        // dd($this->v['extParams']);
        $list_chuyenbay = $this->chuyenbay->list_cb($this->v['extParams'], true, 2);
        // dd($list_chuyenbay);
        $this->v['list_chuyenbay'] = $list_chuyenbay;
        return view('client.home.index', $this->v);
    }


    public function about()
    {
        // show ra giao diện admin
        return view('client.home.about');
    }



    public function blog()
    {
        // show ra giao diện admin
        return view('client.home.blog');
    }

    public function blog_detail()
    {
        // show ra giao diện admin
        return view('client.home.blog_detail');
    }

    public function booking_list()
    {
        // show ra giao diện admin
        return view('client.home.booking_list');
    }

    public function booking_detail()
    {
        // show ra giao diện admin
        return view('client.home.booking_detail');
    }



    // đặt vé

    public function dat_ve(Request $request)
    {
        $checkAuth = Auth::check();
        if ($checkAuth) {
            $account = Auth::user();
            $id_account = $account->id;
            $email = $account->email;
        }

        $this->v['extParams'] = $request->all();
        $params = [];
        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = null;
            }

            if (is_string($item)) {
                $item = $item;
            }

            return $item;
        }, $request->post());

        // tìm chuyến bay theo mã để lấy ra id -> insert vào bảng ve
        $res_Chuyenbay =  $this->chuyenbay->loadOne($params['cols']['ma_cb']);
        $id_chuyen_bay = $res_Chuyenbay->id;
        $ngay_het_han = $res_Chuyenbay->gio_den;
        // dd($id_chuyen_bay);


        unset($params['cols']['ma_cb']);
        $params['cols']['cb_id'] = $id_chuyen_bay;

        unset($params['cols']['_token']);

        // thêm vào bảng vé
        $resVe = $this->ve->add_ve($params);
        if ($resVe > 0) {
            // thêm vào bảng đặt vé
            $paramsDV = [];
            $paramsDV['cols'] = [
                've_id' => $resVe,
                'kh_id' => $id_account,
                'ngay_het_han' => $ngay_het_han

            ];

            // dd($paramsDV);
            $resDatVe = $this->dat_ve->add_dat_ve($paramsDV);

            if ($resDatVe > 0) {
                Mail::to($email)->send(new OrderShipped(['ma' => 'Quá khách đã đặt vé thành công']));
                Session::flash('success', 'Đăt vé thành công');
                return redirect()->route('route_FE_Client_Lich_Su_Dat_Ve');
            }
        }
    }

    public function ls_DatVe()
    {

        // show ra giao diện admin
        if (Auth::check()) {
            $account_id =  Auth::user()->id;
            // dd($account_id);
        }

        $res  = $this->dat_ve->ls_datve(false, null, null, $account_id);
        // dd($res);
        $this->v['info'] = $res;

        return view('client.home.contact', $this->v);
    }
}
