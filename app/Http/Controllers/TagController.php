<?php

namespace App\Http\Controllers;

use App\Services\TagService;
use App\Http\Requests\TagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    private $tagService;

    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }


    /** 
     * Data of a user
     * 
     */
    public function index()
    {
        return Tag::all();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(TagRequest $request)
    {
        $tagService = $this->tagService->store($request);

        if (!$tagService)
            return response()->json(['errors' => [
                'error' => ['Fail add tag']
            ]], 400);

        return response()->json('Success create tag', 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $tagService = $this->tagService->update($request, $tag);

        if (!$tagService)
            return response()->json(['errors' => [
                'error' => ['Fail add tag']
            ]], 400);

        return response()->json('Success update tag', 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Tag $tag)
    {
        $tagService = $this->tagService->delete($tag);

        if (!$tagService)
            return response()->json(['errors' => [
                'error' => ['Fail delete tag']
            ]], 400);

        return response()->json('Success delete tag', 200);
    }
}
