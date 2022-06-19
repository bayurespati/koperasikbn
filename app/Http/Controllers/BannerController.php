<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Services\BannerService;

class BannerController extends Controller
{
    private $bannerService;

    public function __construct(bannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Banner::all();
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(Request $request, Banner $banner)
    {
        $bannerService = $this->bannerService->update($request, $banner);

        if (!$bannerService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah banner']
            ]], 400);

        return response()->json('Berhasil mengubah data banner', 200);
    }
}
