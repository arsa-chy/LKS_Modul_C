<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProduk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = ['namaProduk', 'beratProduk', 'tanggalProduksi', 'hargaProduk', 'idKategori'];

    /**
     * Get the user that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo(NewKategori::class, 'idKategori', 'id');
    }

    /**
     * Get the user associated with the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    // public function orderDetail()
    // {
    //     return $this->hasOne(OrderDetail::class);
    // }
}
