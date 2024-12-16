<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kupon extends Model
{
    use HasFactory;
    protected $fillable = ['kategori','harga','nama', 'deskripsi', 'lokasi', 'tanggal','image'];

    public function orders()
    {
    return $this->hasMany(Order::class, 'kupon_id');  // Relasi satu kupon dengan banyak order
    }
}
