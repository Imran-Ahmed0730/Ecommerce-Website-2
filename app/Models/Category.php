<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category, $imageFolder;

    public static function store($request){

        self::$imageFolder = "Category";

        if(Category::find($request->id)){
            self::$category = Category::find($request->id);
        }
        else{
            self::$category = new Category();
        }

        if ($request->file('image')){
            if (self::$category->image){
                if (file_exists(self::$category->image)){
                    unlink(self::$category->image);
                }
                self::$category->image = saveImageUrl($request, self::$imageFolder);
            }
            else{
                self::$category->image = saveImageUrl($request, self::$imageFolder);
            }
        }

        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function remove($id){
        self::$category = Category::find($id);
        if (self::$category->image){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }

}
