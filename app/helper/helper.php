<?php

function saveImageUrl($request, $pathFolder){
    $image = $request->file('image');
    $imageName = $request->name. '-'. rand(). '.' . $image->extension();
    $directory = 'admin/uploaded-images/'.$pathFolder.'/';
    $imageUrl = $directory.$imageName;
    $image->move($directory, $imageName);

    return $imageUrl;
}

