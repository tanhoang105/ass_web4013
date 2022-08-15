<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use App\Rules\ChuyenBayRule;


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
        $rules = [];
        $actionCurrent = $this->route()->getActionMethod();
        // dd($actionCurrent);
        switch ($this->method()) {
            case 'POST':
                switch ($actionCurrent) {
                    case 'add_ChuyenBay':
                        $rules  = [
                            'ma_cb' => ' min:4 | unique:chuyen_bay',
                            'gia_chuyenbay' => 'required',
                            'giam_gia_cb' => 'required',
                            'noi_di_cb' => 'required',
                            'noi_den_cb' => 'required',
                            'gio_di' => ['required'],
                            'gio_den' =>  ['required', new  ChuyenBayRule],
                            'mb_id' => 'required'
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
            'gia_chuyenbay' => 'Giá chuyến bay',
            'giam_gia_cb' => 'Giảm giá',
            'sb_id' => 'Sân bay',
            'gio_di' => 'Giờ đi',
            'gio_den' => 'Giờ đến',
            'mb_id' => 'Máy bay',
            'noi_di_cb' => 'Nơi đi',
            'noi_den_cb' => 'Nơi đến'
        ];
    }
}
