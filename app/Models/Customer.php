<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = ['id'];

    protected $fillable = [
        'namecustomer',
        'alamat',
        'jeniskelamin',
        'notelepon',
        'status',
        'created_at',
        'update_at',
    ];

    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'update_at';

    public function tipepaket(){
        return $this->belongsTo(TipePaket::class, 'id','customer_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class, 'id','customer_id');
    }

    
}
