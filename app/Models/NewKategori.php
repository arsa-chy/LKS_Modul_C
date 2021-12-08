<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewKategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $guard = ['id'];
    protected $fillable = ['namaKategori'];

    /**
     * Get all of the comments for the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produk()
    {
        return $this->hasMany(NewProduk::class);
    }
}
