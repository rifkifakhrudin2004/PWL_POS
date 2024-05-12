<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BarangModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $table = 'm_barang'; // Mendefiniskan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'barang_id'; // Mendefiniskan primary key dari tabel yang digunakan
    protected $fillable = [
        'kategori_id',
        'barang_kode',
        'barang_nama',
        'harga_beli',
        'harga_jual',
        'image'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    // Mendefinisikan metode untuk mengonversi nilai atribut 'image'
    protected function setImageAttribute($image)
    {
        // Menggunakan metode url() untuk membuat URL lengkap ke gambar di direktori storage
        $this->attributes['image'] = url('/storage/posts/' . $image);
    }
}
