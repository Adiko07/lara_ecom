<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request, $product_id)
    {
        if(Auth::check()){
            $exists = Wishlist::where('user_id', Auth::id())->where('product_id',$product_id)->first();

            if(!$exists){
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $product_id,
                ]);
                return response()->json([
                    'success' => 'Produit ajouté à votre liste de souhait',
                ]);
            }else{
                return response()->json([
                    'error' => 'Le produit existe déjà dans votre liste de souhaits',
                ]);
            }

        }else{
            return response()->json([
                'error' => 'Connectez-vous d\'abord à votre compte !!!',
            ]);
        }
    }

    public function listWishList()
    {
        if(Auth::check()){
            $wishlists = Wishlist::with(['products'])->where('user_id', Auth::id())->latest()->paginate(5);
        }else{
            $wishlists = [];
        }
        //return $wishlists;
        return view('frontend.frontend_layout.wishlist_page.wishlist_list', compact('wishlists'));
    }

    public function removefromWishList($wish_id)
    {
        if(Auth::check()){
            Wishlist::where('user_id', Auth::id())->where('id',$wish_id)->delete();
            return response()->json([
                'success' => 'Successfully removed from you wishlist'
            ],200);
        }
        else{
            return response()->json([
                'error' => 'Connectez-vous d\'abord à votre compte !!!',
            ]);
        }
    }
}
