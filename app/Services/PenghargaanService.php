<?php

namespace App\Services;

use App\Models\Penghargaan;

class PenghargaanService
{
    public function store($request)
    {
        try {
            $paylod = $request->only('title', 'title_indo', 'description', 'description_indo', 'file_name');
            $model = Penghargaan::make($paylod);
            $model->file_link = saveFile($request);
            $model->save();
            return true;
        } catch (\Exception $e) {
            dd($e->getMessage());
            return false;
        }
    }

    public function update($request, $model)
    {
        try {
            //if update new file 
            if ($model->file_link != $request->file_file) {
                removeFile($model); //-- removeFile helpers function -- //
                $model->file_link = saveFile($request);
                $model->file_name = $request->file_name;
            }

            $model->title = $request->title;
            $model->title_indo = $request->title_indo;
            $model->description = $request->description;
            $model->description_indo = $request->description_indo;
            $model->update();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function delete($model)
    {
        try {
            removeFile($model);
            return $model->delete();
        } catch (\Exception $e) {
            return false;
        }
    }
}
