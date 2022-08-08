<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class ChuyenBayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {


        $rules  = [];
        $currentAction = $this->route()->getActionMethod();

        // dd($currentAction);
        // dd($currentAction); // trả về method mà chúng ta đang làm việc ở đây đó chính là function  add_chuyen_bay()
        switch ($this->method()) {
                // trả về post hay get

            case 'POST':
                // $method = $this->method();
                // dd($method);

                switch ($currentAction) {

                    case 'add_ChuyenBay':

                        $rules = [
                            'ma_cb' =>  'required | min:3 | unique:chuyen_bay', // duy nhất trong bảng chuyến bay
                            'sb_id' => 'required',
                            'gio_di' => 'required',
                            'gio_den' => 'required',
                            'mb_id' => 'required',

                        ];

                        break;

                    case 'update_ChuyenBay':

                        $rules = [
                            'ma_cb' =>  'required | min:3',
                            'sb_id' => 'required',
                            'gio_di' => 'required',
                            'gio_den' => 'required',
                            'mb_id' => 'required',

                        ];

                        break;

                    default:

                        break;
                }
                break;

            default:

                break;
        }

        return $rules;
    }


    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute ít nhất 6 ký tự',
        ];
    }

    public function attributes()
    {
        return [
            'ma_cb' => 'Mã chuyến bay',
            'ngay_di' => 'Ngày đi',
            'sb_id' => 'Sân bay',
            'gio_di' => 'Giờ đi',
            'gio_den' => 'Giờ đến',
            'mb_id' => 'Máy bay',
        ];
    }
}
