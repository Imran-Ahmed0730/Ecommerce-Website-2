<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use ShoppingCart;

class CartController extends Controller
{
    private $product;
    public function index(){
//        return ShoppingCart::all();
        return view('front-end.cart.cart', [
            'products'=>ShoppingCart::all()
        ]);
    }
    public function addToCart(Request $request, $id){
//        return $request;
        $this->product = Product::find($id);
        ShoppingCart::add(
            $this->product->id,
            $this->product->name,
            $request->qty,
            $this->product->selling_price,
            [
                'image'=>$this->product->image,
                'category'=>$this->product->category->name,
                'brand'=>$this->product->brand->name,
                ]);

        return redirect('cart/show')->with('message', 'Product Included in the Cart');
    }

    public function updateQty(Request $request, $id){
//        return $request;
        ShoppingCart::update($id, $request->qty);
        return back()->with('message', 'Cart Products Updated');

    }

    public function remove($id){
        ShoppingCart::remove($id);
        return back();
    }
}
