<?php

namespace App\Http\Controllers;
use App\Leader;

use Illuminate\Http\Request;
use App\Http\Requests\Leders\CreateLederRequest;
use App\Http\Requests\Leders\UpdateLederRequest;

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


    public function edit(Leader $leader)
    {
        return view('leaders.index')->with('leader', $leader);
    }


    public function update(UpdateLederRequest $request, Leader $leader)
    {
        $data = $request->only(['name', 'description', 'message', 'course']);
        // check if new image
        if ($request->hasFile('image')) {
          // uplload it
          $image = $request->image->store('leaders');
          // delete old one
          $leader->deleteImage();

          $data['image'] = $image;
        }

        // if ($request->tags) {
        //   $post->tags()->sync($request->tags);
        // }

        // update attributes
        $leader->update($data);

        // flash message
        session()->flash('success', 'Leader updated successfully.');

        // redirect user
        return redirect(route('list'));
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

        return redirect()->back();

    }

      public function restore($id)
    {
      $leader = Leader::withTrashed()->where('id', $id)->firstOrFail();

      $leader->restore();

      session()->flash('success', 'Leader restored successfully.');

      return redirect()->back();
    }


}
