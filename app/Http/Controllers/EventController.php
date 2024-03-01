<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function getAll(): Response {

        $events = Event::orderBy('date')->get();
        return Inertia::render('Events/Events', ['events' => $events]);

    }

    public function getOne(Event $event): Response {

        return Inertia::render('Events/Show', ['event' => $event]);

    }
}
