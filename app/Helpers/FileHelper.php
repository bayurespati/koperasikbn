<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

function saveFile($request)
{

    $path = public_path('file/app/');

    if (!is_dir($path)) {
        File::makedirectory($path, 0777, true);
    }

    $name = time() . $request->file_name;;
    $file = setFile($request->file_file);
    file_put_contents($path . $name, $file);

    return 'file/app/' . $name;
}

function saveFileWithName($file, $file_name)
{
    $path = public_path('file/app/');
    if (!is_dir($path)) {
        File::makedirectory($path, 0777, true);
    }
    $name = time() . $file_name;;
    $temp_file = setFile($file);
    file_put_contents($path . $name, $temp_file);
    return 'file/app/' . $name;
}

function removeFile($model)
{

    $path = public_path($model->file_link);

    if (file_exists($path) && $model->file_link != null) {
        unlink($path);
    }
}

function setFile($file)
{
    list(, $file) = explode(';', $file);
    list(, $file) = explode(',', $file);
    return base64_decode($file);
}
