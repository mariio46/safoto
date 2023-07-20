<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Event;
use Illuminate\Http\Request;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'dashboard.layout.content.events.index',
            [
                'title'     => 'Safoto | All Events',
                'events'    => Event::select(['eventName', 'slug'])->withCount('pictures')->latest()->paginate(5),
            ]
        );
    }

    public function create()
    {
        return view('dashboard.layout.content.events.create', [
            'title'     => 'Safoto | New Events',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['slug'] = Str::slug($request->eventName);
        $validateEvents = $request->validate(
            [
                'eventName' => 'required|string|max:255',
                'slug'      => '',
            ],
            [
                'eventName.required'        => 'Event City is required',
            ],
        );

        // dd($validateEvents);

        Event::create($validateEvents);
        return to_route('events.index')->with('success', 'Success, Event has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view(
            'dashboard.layout.content.events.edit',
            [
                'title' => 'Safoto | Edit Events',
                'event' => $event,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $rules =
            [
                'eventName' => 'required|string|max:255',
            ];

        if ($request->slug != $event->slug) {
            # code...
            $rules['slug'] = 'required|max:255|unique:events';
        }
        $validateEvents = $request->validate($rules);

        Event::where('id', $event->id)->update($validateEvents);
        return to_route('events.index')->with('success', 'Success, Event has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->pictures()->count() > 0) {
            return to_route('events.index')->with('error', 'Error, This event has a picture, you cant delete it!');
        } else {
            Event::destroy($event->id);
            return to_route('events.index')->with('success', 'Success, Event has been deleted!');
        }
    }
}
