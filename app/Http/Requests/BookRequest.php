<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'nama' => 'required|max:50',
            'penulis' =>'required|max:50',
            'halaman' => 'required|integer|min:1',
            'tahun_terbit' => 'required|integer|min:2000|max:2021',
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'penulis.required' => 'Penulis Tidak Boleh Kosong ',
            'halaman.required' => 'Halaman tidak Boleh Kosong atau 0',
            'tahun_terbit.required' => 'Tahun terbit harus dari tahun 2000 - 2021',
        ];
    }
}
