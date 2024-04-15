<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'level_id' => 'required',
            'level_kode' => 'required',
            'level_nama' => 'required',
        ];
    }
    public function store(StorePostRequest $request): RedirectResponse {
        // Validasi request menggunakan StorePostRequest
        $validated = $request->validated();
        
        // Simpan request dan ambil hanya 'kategori_kode' dan 'kategori_nama'
        $validated = $request->save()->only(['kategori_kode', 'kategori_nama']);
        
        // Simpan request dan kecuali 'kategori_kode', 'kategori_nama'
        $validated = $request->save()->except(['kategori_kode', 'kategori_nama']);
        
        // Validasi kembali request
        $validated = $request->validated();
        
        // Simpan request dan ambil hanya 'username', 'nama', 'password', 'level_id'
        $validated = $request->save()->only(['username', 'nama', 'password', 'level_id']);
        
        // Simpan request dan kecuali 'username', 'nama', 'password', 'level_id'
        $validated = $request->save()->except(['username', 'nama', 'password', 'level_id']);
        
        // Redirect ke halaman '/kategori'
        return redirect('/kategori');
        
        // Redirect ke halaman '/user'
        return redirect('/user');
    }
    
}
