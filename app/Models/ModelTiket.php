<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTiket extends Model
{
    use HasFactory;

    protected $table = 'tb_tiket';

    protected $primaryKey = 'id_tiket';
    protected $fillable = [
        'nama_event',
        'tgl_event',
        'harga',
        'stock_tiket',
        'gambar',
        'lokasi',
        'deskripsi',
        'jam', 
    ];

    public function orders()
    {
        return $this->hasMany(ModelOrder::class, 'tiket_id');
    }
}
