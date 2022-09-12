<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';

    protected $fillable = [
        'cabang_id',
        'customer_id',
        'tipepaket_id',
        'namapaket_id',
        'tanggalselesai',
        'jumlah',
        'berat',
        'total_bayar',
        'created_at',
        'update_at',
    ];

    public function tipepaket(){
        return $this->belongsTo('App\Models\TipePaket', 'tipepaket_id','id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customer', 'customer_id','id');
    }

    public function cabang(){
        return $this->belongsTo('App\Models\Cabang', 'cabang_id','id');
    }
    public function namapaket(){
        return $this->belongsTo('App\Models\NamaPaket', 'namapaket_id','id');
    }
}
