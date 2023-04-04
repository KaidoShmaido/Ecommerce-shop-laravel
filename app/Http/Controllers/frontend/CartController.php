<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_product(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
            if(Auth::check()){
                $prod_check=Product::where('id',$product_id)->exists();

                if($prod_check)
                {
                    if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                        
                    }
                    $cartItem =new Cart();
                    $cartItem->prod_id=$product_id;
                    $cartItem->user_id=Auth::id();
                    $cartItem->prod_id=$product_qty;
                    $cartItem->save();
                    return response()->json(['status'=>$prod_check->name."added to the cart"]);

                }
            }
            else{
                return response()->json(['status'=>"login to continue"]);
            }

    }
}
