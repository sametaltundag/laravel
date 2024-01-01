<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $guarded = [];
    
    public function order(){
        return $this->hasOne(Order::class);
    }

    public function price(){
        return $this->hasOne(Price::class);
    }
}
