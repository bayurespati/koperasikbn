<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Requests\ImageRequest;
use App\Models\Image;

class ImageController extends Controller
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }


    /** 
     * Data of a image 
     * 
     */
    public function index()
    {
        return Image::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(ImageRequest $request)
    {
        $imageService = $this->imageService->store($request);

        if (!$imageService)
            return response()->json(['errors' => [
                'error' => ['Gagal membuat foto']
            ]], 400);

        return response()->json('Berhasil menambahkan foto', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(ImageRequest $request, Image $image)
    {
        $imageService = $this->imageService->update($request, $image);

        if (!$imageService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah foto']
            ]], 400);

        return response()->json('Berhasil mengubah foto', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Image $image)
    {
        $imageService = $this->imageService->delete($image);

        if (!$imageService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus foto']
            ]], 400);

        return response()->json('Berhasil menghapus foto', 200);
    }
}
