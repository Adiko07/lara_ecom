<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class SearchProductController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('name');
    
        // Search in the title and body columns from the products table
        $products = Product::query()
            ->where('product_name_en', 'LIKE', "%{$search}%")
            ->orWhere('short_description_en', 'LIKE', "%{$search}%")
            ->orWhere('product_size_en', 'LIKE', "%{$search}%")
            ->orWhere('product_color_en', 'LIKE', "%{$search}%")
            ->orWhere('longueur', 'LIKE', "%{$search}%")
            ->orWhere('largeur', 'LIKE', "%{$search}%")
            ->orWhere('epaisseur', 'LIKE', "%{$search}%")
            ->orWhere('long_description_en', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('frontend.autosearch', compact('products'));
    }

    public function subcategoryProducts($id, $slug)
    {
        $categories = Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();
        $subcategory_products = Product::where('status', 1)->where('subcategory_id', $id)->orderBy('id','DESC')->paginate(3);
        //$categories = Category::with(['subcategory'])->orderBy('category_name_en', 'ASC')->get();
        return view('frontend.autosearch', compact('subcategory_products','categories'));
    }
}
