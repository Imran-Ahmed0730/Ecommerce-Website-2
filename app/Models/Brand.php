<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $imageFolder;

    public static function store($request){

        self::$imageFolder = "Brand";

        if(Brand::find($request->id)){
            self::$brand = Brand::find($request->id);
        }
        else{
            self::$brand = new Brand();
        }

        if ($request->file('image')){
            if (self::$brand->image){
                if (file_exists(self::$brand->image)){
                    unlink(self::$brand->image);
                }
                self::$brand->image = saveImageUrl($request, self::$imageFolder);
            }
            else{
                self::$brand->image = saveImageUrl($request, self::$imageFolder);
            }
        }

        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->status = $request->status;
        self::$brand->save();
    }

    public static function remove($id){
        self::$brand = Brand::find($id);
        if (self::$brand->image){
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }

}
