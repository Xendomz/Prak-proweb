<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_siswa' => 'required',
            'nik' => 'required|max:10',
            'alamat' => 'required',
            'id_kelas' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_siswa.required' => 'Nama Siswa tidak boleh kosong'
        ];
    }
}
