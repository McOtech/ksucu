<?php

namespace App\Http\Controllers;

use App\Cohort;
use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function show(Cohort $cohort){
        $events = Event::where('cohort_id', $cohort->id)->get();
        return view('admin.past-events', compact('cohort'))->with(['category' => 'past', 'events' => $events]);
    }

    public function create(Cohort $cohort){
        $events = Event::where('cohort_id', $cohort->id)->get();
        return view('admin.past-events', compact('cohort'))->with(['category' => 'scheduled', 'events' => $events]);
    }

    public function store(Cohort $cohort){
        $data = request()->validate([
            'image' => ['image'],
            'name' => ['required', 'string', 'max:255'],
            'date' => ['required'],
            'venue' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'cohort_id' => ['required']
        ]);
            $imagePath = "";
        if (request('image') != null) {
            $imagePath = request('image')->store('events/' . $data['cohort_id'], 'public');
        }else{
            $imagePath = "undraw_posting_photo.svg";
        }

        Event::create([
            'cohort_id' => $data['cohort_id'],
            'name' => $data['name'],
            'date' => $data['date'],
            'venue' => $data['venue'],
            'description' => $data['description'],
            'image' => $imagePath,

        ]);

        return redirect()->route('event.create', compact('cohort'))->with(['category' => 'scheduled']);
    }
}
