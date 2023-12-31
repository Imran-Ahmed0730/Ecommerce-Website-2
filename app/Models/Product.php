<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\OtherImage;

class Product extends Model
{
    use HasFactory;
    private static $product, $imageFolder;

    public static function store($request){

        self::$imageFolder = "Product";

        if(Product::find($request->id)){
            self::$product = Product::find($request->id);
            self::$product->featured_status = $request->featured_status;
        }
        else{
            self::$product = new Product();
        }

        if ($request->file('image')){
            if (self::$product->image){
                if (file_exists(self::$product->image)){
                    unlink(self::$product->image);
                }
                self::$product->image = saveImageUrl($request, self::$imageFolder);
            }
            else{
                self::$product->image = saveImageUrl($request, self::$imageFolder);
            }
        }

        self::$product->category_id = $request->category_id;
        self::$product->subcategory_id = $request->subcategory_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->unit_id = $request->unit_id;
        self::$product->name = $request->name;
        self::$product->code = $request->code;
        self::$product->model = $request->model;
        self::$product->stock_amount = $request->stock_amount;
        self::$product->regular_price = $request->regular_price;
        self::$product->selling_price = $request->selling_price;
        self::$product->short_description = $request->short_description;
        self::$product->long_description = $request->long_description;
        self::$product->status = $request->status;
        self::$product->save();
        return self::$product;
    }

    public static function remove($id){
        self::$product = Product::find($id);
        if (self::$product->image){
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function otherImages(){
        return $this->hasMany(OtherImage::class);
    }
}
