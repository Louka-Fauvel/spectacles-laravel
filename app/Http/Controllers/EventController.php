<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Request;
//use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function getAll() {
        //$events = Event::orderBy('date')->with('tags')->get();
        $events = Event::query()
        ->when(Request::input('search'), function($query, $search) {
            $query->where('name', 'like', $search . '%');
        })
        ->orderBy('date')
        ->with('tags')
        ->get();
        return Inertia::render('Events/Events', ['events' => $events]);

    }

    public function getOne(Event $event): Response {

        $event->load(['tags', 'artists', 'room.place.city.country']);
        
        return Inertia::render('Events/Show', ['event' => $event]);
    }
}
