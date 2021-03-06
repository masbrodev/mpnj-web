<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['nama_produk','satuan','berat','harga_modal','harga_jual','diskon','stok','keterangan','tipe_produk','foto','wishlist','terjual','pelapak_id','kategori_produk_id'];

    public function foto_produk()
    {
        return $this->hasMany(Foto_Produk::class, 'produk_id', 'id_produk');
    }
}
