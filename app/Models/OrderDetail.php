<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ShoppingCart;

class OrderDetail extends Model
{
    private static $orderDetail;
    use HasFactory;

    public static function add($id){
        foreach (ShoppingCart::all() as $order){
            self::$orderDetail = new OrderDetail();
            self::$orderDetail->order_id = $id;
            self::$orderDetail->product_id = $order->id;
            self::$orderDetail->product_name = $order->name;
            self::$orderDetail->product_price = $order->total;
            self::$orderDetail->product_quantity = $order->qty;
            self::$orderDetail->save();

            ShoppingCart::remove($order->__raw_id);
        }
    }
}
