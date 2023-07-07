<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;
    private static $otherImage, $imageName, $directory, $imageUrl;
    public static function saveImageUrl($images, $id, $folderName){
        foreach ($images as $image){
            self::$otherImage = new OtherImage();
            self::$otherImage->product_id = $id;
            self::$otherImage->image = self::saveImage($image, $folderName);
            self::$otherImage->save();
        }
    }

    private static function saveImage($image, $pathFolder){
        self::$imageName = $pathFolder. '-'. rand(). '.' . $image->extension();
        self::$directory = 'admin/uploaded-images/Product/other-images/';
        self::$imageUrl = self::$directory.self::$imageName;
        $image->move(self::$directory, self::$imageName);
        return self::$imageUrl;
    }
}
