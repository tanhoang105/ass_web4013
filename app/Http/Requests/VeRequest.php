<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeRequest extends FormRequest
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
        $actionMethod  =  $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'POST':
                switch ($actionMethod) {
                    case 'add_Ve':
                        return $rules = [
                            'ma_ve' => 'required | min:3 | unique:ve',
                            'cb_id' => 'required',
                            'gia_ve' => 'required',
                            'loai_ve'  => 'required',
                            'giam_gia' => 'required',

                        ];
                        break;

                    case 'update_Ve':
                        return $rules = [
                            'ma_ve' => 'required | min:3 ',
                            'cb_id' => 'required',
                            'gia_ve' => 'required',
                            'loai_ve'  => 'required',
                            'giam_gia' => 'required',

                        ];
                        break;

                    default:
                        # code...
                        break;
                }
                break;

            default:
                # code...
                break;
        }

        return $rules;
    }

    public function messages()
    {
        return  [
            'required' => ':attribute bắt buộc cần nhập',
            'min' => ':attribute ít nhất 3 ký tự',
            'unique' => ':attribute đã tồn tại'

        ];
    }

    public function attributes()
    {
        return [
            'ma_ve' => 'Mã vé',
            'cb_id' => 'Chuyến bay',
            'gia_ve' => 'Giá ve',
            'giam_gia' => 'Giảm giá',
            'loai_ve' => 'Loại vé'
        ];
    }
}
