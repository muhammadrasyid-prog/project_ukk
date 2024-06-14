<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    // nama table
    protected $table = 'barangmasuk';

    // isi table barangmasuk
    protected $fillable = [
        'tgl_masuk',
        'qty_masuk',
        'barang_id',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}