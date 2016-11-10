<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'phone' =>'required',
            'remarks' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'silahkan isi nis',
            'nis.numeric' => 'nis harus angka',
            'nis.unique' => 'nis sudah ada',
            'nama.required' => 'silahkan isi nama',
            'alamat.required' => 'silahkan isi alamat'
        ];
    }
}
