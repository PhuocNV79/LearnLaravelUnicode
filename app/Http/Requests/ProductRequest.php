<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tensanpham'=>'min:15|required',
            'giasanpham'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'tensanpham.min'=>':attribute phai lon hon :min ky tu',
            'tensanpham.required'=>':attribute bat buoc nhap',
            'giasanpham.required'=>':attribute bat buoc nhap', 
        ];
    }

    public function attributes()
    {
        return [
            'tensanpham'=>'Tên sản phẩm',
            'giasanpham'=>'Giá sản phẩm'
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if($validator->errors()->count()>0){
                $validator->errors()->add('msg', 'da xay ra loi. kiem tra lai');
            }
            //dd($validator->errors());
        });
    }

    protected function prepareForValidation(){
        $this->merge([
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 'Nguyen'
        ]);
    }

    protected function failedAuthorization()
    {
        throw new AuthorizationException('Khong co quyen truy cap');
    }
}
