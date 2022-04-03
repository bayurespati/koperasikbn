<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VideoService;
use App\Models\Video;
use App\Http\Requests\VideoRequest;

class VideoController extends Controller
{
    private $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Video::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(VideoRequest $request)
    {
        $videoService = $this->videoService->store($request);

        if (!$videoService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan video']
            ]], 400);

        return response()->json('Berhasil menambahkan video', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(VideoRequest $request, Video $video)
    {
        $videoService = $this->videoService->update($request, $video);

        if (!$videoService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah video']
            ]], 400);

        return response()->json('Berhasil mengubah data video', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Video $video)
    {
        $videoService = $this->videoService->delete($video);
        if (!$videoService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data video']
            ]], 400);

        return response()->json('Berhasil menghapus data video', 200);
    }
}
