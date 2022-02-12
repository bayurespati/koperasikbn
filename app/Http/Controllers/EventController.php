<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EventService;
use App\Http\Requests\EventRequest;
use App\Models\Event;

class EventController extends Controller
{
    private $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }


    /** 
     * Data of a events 
     * 
     */
    public function index()
    {
        return Event::with('tags')->get();
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(EventRequest $request)
    {
        $eventService = $this->eventService->store($request);

        if (!$eventService)
            return response()->json(['errors' => [
                'error' => ['Fail create event']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success create event',
            'data'    => $eventService
        ], 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(EventRequest $request, Event $event)
    {
        $eventService = $this->eventService->update($request, $event);

        if (!$eventService)
            return response()->json(['errors' => [
                'error' => ['Fail update event']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success update event',
            'data'    => $eventService
        ], 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(Event $event)
    {
        $eventService = $this->eventService->delete($event);

        if (!$eventService)
            return response()->json(['errors' => [
                'error' => ['Fail delete event']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success delete event',
            'data'    => $eventService
        ], 200);
    }


    /** 
     * Store a newly image. 
     * 
     */
    public function getImages(Request $request)
    {
        $data = Event::where('id', $request->event_id)->with('images')->first()->images;
        return response()->json([
            'status'  => 'Success',
            'message' => 'Images',
            'data'    => $data
        ], 200);
    }


    /** 
     * Store a newly image. 
     * 
     */
    public function storeImage(Request $request, Event $event)
    {
        $eventService = $this->eventService->addImage($request, $event);

        if (!$eventService)
            return response()->json(['errors' => [
                'error' => ['Fail add image event']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success add image event',
            'data'    => $eventService
        ], 200);
    }


    /** 
     * Delete a image. 
     * 
     */
    public function deleteImage(Request $request, Event $event)
    {
        $eventService = $this->eventService->deleteImage($request, $event);

        if (!$eventService)
            return response()->json(['errors' => [
                'error' => ['Fail delete image event']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success delete image event',
            'data'    => $eventService
        ], 200);
    }
}
