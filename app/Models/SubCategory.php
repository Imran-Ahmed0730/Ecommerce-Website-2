<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subcategory, $imageFolder;

    public static function store($request){

        self::$imageFolder = "Sub-Category";

        if(SubCategory::find($request->id)){
            self::$subcategory = SubCategory::find($request->id);
        }
        else{
            self::$subcategory = new SubCategory();
        }

        if ($request->file('image')){
            if (self::$subcategory->image){
                if (file_exists(self::$subcategory->image)){
                    unlink(self::$subcategory->image);
                }
                self::$subcategory->image = saveImageUrl($request, self::$imageFolder);
            }
            else{
                self::$subcategory->image = saveImageUrl($request, self::$imageFolder);
            }
        }

        self::$subcategory->name = $request->name;
        self::$subcategory->category_id = $request->category_id;
        self::$subcategory->description = $request->description;
        self::$subcategory->status = $request->status;
        self::$subcategory->save();
    }

    public static function remove($id){
        self::$subcategory = SubCategory::find($id);
        if (self::$subcategory->image){
            unlink(self::$subcategory->image);
        }
        self::$subcategory->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
