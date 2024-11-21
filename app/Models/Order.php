<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['grand_total', 'shipping_cost', 'discount', 'user_id'];

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
