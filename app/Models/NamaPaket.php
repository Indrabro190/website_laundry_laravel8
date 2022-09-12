<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaPaket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['tipepaket_id','namepaket'];

    // relasi ke tipe paket
    public function tipepaket(){
        return $this->belongsTo(TipePaket::class, 'tipepaket_id','id');
    }
}
