<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['namecabang'];

    public function Paket(){
        return $this->belongsTo(Cabang::class);
    }

    // public function Transaksi(){
    //     return $this->hasMany('App\Models\Transaksi','id_cabang','id_cabang');
    // }
}
