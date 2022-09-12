<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipePaket extends Model
{
    use HasFactory;

    // protected $table = ['tipe_pakets'];
    protected $guarded = ['id'];
    protected $fillable = ['nametipe'];


    // relasi ke customer dan tipepaket
    public function tipepaket(){
        return $this->hasOne(TipePaket::class, 'id','tipepaket_id');
    }

    public function Transaksi(){
        return $this->hasMany(Transaksi::class,'id','tipepaket_id');
    }
}
