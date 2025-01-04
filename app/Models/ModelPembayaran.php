<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPembayaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pembayaran';
    
    protected $fillable = [
        'id_user',
        'id_tiket',
        'jumlah_tiket',
        'total_harga',
        'metode_pembayaran',
        'status_pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function tiket()
    {
        return $this->belongsTo(ModelTiket::class, 'id_tiket', 'id_tiket');
    }
}
