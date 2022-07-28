<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\CssSelector\Node\FunctionNode;

class MayBayRequest extends FormRequest
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
        $ActionCurrent  = $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'POST':
                    switch ($ActionCurrent) {
                        case 'add_MayBay':
                                $rules = [
                                    'so_hieu_mb' => 'required | min:4 | unique:may_bay',
                                    'ma_loai_mb_id' => 'required'
                                ];
                            break;

                            case 'update_MayBay':
                                $rules = [
                                    'so_hieu_mb' => 'required | min:4',
                                    'ma_loai_mb_id' => 'required'
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
        return $rules ;
    }


    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute lớn hơn 4 ký tự',
            'unique' => ':attribute đã tồn tại'

        ];
    }

    public function attributes()
    {
        return [

            'so_hieu_mb' => 'Số hiệu máy bay',
            'ma_loai_mb_id' => 'Mã loại máy bay'
        ];
    }
}
