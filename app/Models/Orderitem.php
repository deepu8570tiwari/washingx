<?php

namespace App\Models;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;
    protected $table="order_items";
    protected $fillable=[
        "order_id",
        "prod_id",
        "prod_qty",
        "prod_price",
    ];
    public function products(){
        return $this->belongsTo(product::Class,'prod_id','id');
    }
}
