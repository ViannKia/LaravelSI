<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePembelianRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'id_pembelian' => 'required|unique:pelanggan,id|min:7|max:7',
            // 'nama_pelanggan' => 'required',
            // 'alamat' => 'required',
            // 'no_hp' => 'required|numeric',
        ];
    }
}
