<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\CssSelector\Node\FunctionNode;

class LoaiMayBayRequest extends FormRequest
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
        $actionCurrent =  $this->route()->getActionMethod();
        // dd($actionCurrent);

        switch ($this->method()) {
            case 'POST':
                switch ($actionCurrent) {
                    case 'add_Loai_MB':
                        $rules = [
                            'ma_loai_mb' =>  'required | min:3 |unique:loai_mb',
                            'ten_loai_mb' => 'required | min:3'
                        ];
                        break;

                    case 'update_Loai_MB':
                        $rules = [
                            'ma_loai_mb' =>  'required | min:3 |unique:loai_mb',
                            'ten_loai_mb' => 'required | min:3'
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
            'required' => ':attribute bắt buộc cần nhập',
            'min' => ':attribute lớn hơn 3 ký tự'
        ];
    }

    public function attributes()
    {
        return [
            'ma_loai_mb' => "Mã lại máy bay",
            'ten_loai_mb' => 'Tên loại máy bay'
        ];
    }
}
