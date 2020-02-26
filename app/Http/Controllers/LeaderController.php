<?php

namespace App\Http\Controllers;
use App\Leader;

use Illuminate\Http\Request;
use App\Http\Requests\Leders\CreateLederRequest;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leaders.index');
    }


    public function list()
    {
        return view('leaders.list')->with('leader', Leader::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLederRequest $request)
    {

        // upload the image to storage
        $image = $request->image->store('leaders');
        // create the post
        $leader = Leader::create([
          'name' => $request->name,
          'course' => $request->course,
          'description' => $request->description,
          'image' => $image,
          'message' => $request->message,
        ]);
        session()->flash('success', 'Leader Added successfully.');
        return redirect(route('list'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function trashed()
    {
      $trashed = Leader::onlyTrashed()->get();
      return view('leaders.list')->with('leader', $trashed);
    }


    public function destroy($id)
    {
        // $leader->delete();
        // return redirect(route('list'));

        $leader = Leader::withTrashed()->where('id', $id)->firstOrFail();

        if ($leader->trashed()) {
            $leader->deleteImage();
            $leader->forceDelete();
        } else {
            $leader->delete();
        }
        session()->flash('success', 'Leader deleted successfully.');

        return redirect(route('list'));

      }
}
