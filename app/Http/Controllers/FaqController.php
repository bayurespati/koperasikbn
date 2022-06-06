<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FaqService;
use App\Models\Faq;
use App\Http\Requests\FaqRequest;

class FaqController extends Controller
{
    private $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->faqService = $faqService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Faq::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(FaqRequest $request)
    {
        $faqService = $this->faqService->store($request);

        if (!$faqService)
            return response()->json(['errors' => [
                'error' => ['Gagal menambahkan faq']
            ]], 400);

        return response()->json('Berhasil menambahkan faq', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        $faqService = $this->faqService->update($request, $faq);

        if (!$faqService)
            return response()->json(['errors' => [
                'error' => ['Gagal mengubah faq']
            ]], 400);

        return response()->json('Berhasil mengubah data faq', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Faq $faq)
    {
        $faqService = $this->faqService->delete($faq);

        if (!$faqService)
            return response()->json(['errors' => [
                'error' => ['Gagal menghapus data faq']
            ]], 400);

        return response()->json('Berhasil menghapus data faq', 200);
    }
}
