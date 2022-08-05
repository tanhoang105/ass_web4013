<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class SanbayRequest extends FormRequest
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
        $rule  = [];
        $actionMethod = $this->route()->getActionMethod();
        // lấy ra method mình đang làm việc
        switch ($this->method()) {
            case 'POST':
                switch ($actionMethod) {
                    case 'add_SanBay':
                        $rule  = [
                            'ten_sb' => 'required | min:3 | unique:san_bay',
                            'dia_chi_sb' => 'required',
                            'loai_sb' =>  'required'

                        ];
                        break;

                    case 'update_SanBay':
                        $rule  = [
                            'ten_sb' => 'required | min:3',
                            'dia_chi_sb' => 'required',
                            'loai_sb' =>  'required'

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
        return $rule;
    }

    public function messages()
    {
        return
            [
                'required' => ':attribute bắt buộc cần nhập',
                'unique' => ':attribute đã tồn tại',
                'min' => ':attribute bắt buộc lớn hơn 3 ký tự'
            ];
    }

    public function attributes()
    {
        return [
            'ten_sb' => 'Tên sân bay ',
            'dia_chi_sb' => 'Địa chỉ sân bay',
            'loai_sb' => 'Loại sân bay'
        ];
    }
}
