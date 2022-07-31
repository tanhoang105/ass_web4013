<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
        $actionMethod = $this->route()->getActionMethod();
        // dd($actionMethod);
        switch ($this->method()) {
            case 'POST':
                switch ($actionMethod) {
                    case 'add_Slide':
                        $rules = [
                            'ten_slide' => 'required | min:3',
                            'anh_slide' => 'required'
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

    public function attributes()
    {
        return [
            'ten_slide' => 'Tên slide',
            'anh_slide' => 'Ảnh slide'
        ];
    }
}
