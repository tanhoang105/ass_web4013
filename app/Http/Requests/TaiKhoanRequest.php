<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TaiKhoanRequest extends FormRequest
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
        $actionMethod = $this->route()->getActionMethod();
       
        switch ($this->method()) {
            case 'POST':
                switch ($actionMethod) {
                    case 'add_TaiKhoan':
                        $rules = [
                            'name' => 'required ',
                            'email' => 'required | email',
                            'password' => 'required',
                            'role_id' => 'required',
                            
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
        return [
            'required' => ':attribute bắt buộc cần nhập'
        ];
    }

    public function  attributes()
    {
        return [
            'role_id' => 'Vai trò',
            'name' => "Tên tài khoản"
        ];
    }
}
