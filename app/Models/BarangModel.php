<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';
    protected $fillable = ['kategori_id','barang_kode','barang_nama', 'harga_beli', 'harga_jual']; // Menggunakan array untuk $fillable

    // Mengubah `update_at` menjadi `updated_at` untuk penulisan yang benar
    protected $dates = ['created_at', 'updated_at'];

    // Method untuk mendefinisikan relasi dengan model KategoriModel
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}
