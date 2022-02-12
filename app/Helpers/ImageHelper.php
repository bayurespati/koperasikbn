<?php

use Illuminate\Support\Facades\File;

function saveImage($request)
{

    $path = public_path('img/app/');

    if (!is_dir($path)) {
        File::makedirectory($path, 0777, true);
    }

    $name = time() . $request->image_name;;
    $image = setImage($request->image_file);
    file_put_contents($path . $name, $image);

    return 'img/app/' . $name;
}

function removeImage($model)
{

    $path = public_path($model->image_link);

    if (file_exists($path) && $model->image_link != null) {
        unlink($path);
    }
}

function setImage($image)
{

    list(, $image) = explode(';', $image);
    list(, $image) = explode(',', $image);

    return base64_decode($image);
}
