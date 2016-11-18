<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
class RequestKontak extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'email'=>'required|unique:contact',
            'name' =>'required',
            'phonenumber' =>'required',
            'remarks' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'silahkan isi email',
            'email.unique' => 'email sudah ada',
            'name.required' => 'silahkan isi nama',
            'phonenumber.required' => 'silahkan isi no handphone atau telepon',
            'remarks.required' => 'silahkan isi keterangan'
        ];
    }

    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
