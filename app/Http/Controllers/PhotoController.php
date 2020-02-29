<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(){
        $photos = Photo::all();
        return json_encode($photos);
    }

    public function create(){
        $photos = Photo::all();
        return view('admin.upload-photo', compact('photos'));
    }

    public function store(){
        $data = request()->validate([
            'path' => ['required', 'image']
        ]);

        if (request('path') != null) {
            $imagePath = request('path')->store('videoCoverage/photos', 'public');

            Photo::create([
                'path' => $imagePath
            ]);
        }else{
            // $imagePath = "undraw_posting_photo.svg";
        }
        return redirect()->route('photo.create');
    }

    public function update(Photo $photo){
        $data = request()->validate([
            'path' => ['required', 'image']
        ]);

        $previousPath = $photo->path;

        if (request('path') != null) {
            $imagePath = request('path')->store('videoCoverage/photos', 'public');

            if($photo->update(['path' => $imagePath])){
                Storage::disk('public')->delete($previousPath);
            }
            // Storage::delete('storage/' . $previousPath);
        }else{
            // $imagePath = "undraw_posting_photo.svg";
        }
        return redirect()->route('photo.create');
    }

    public function delete(Photo $photo){
        if($photo->delete()){
            Storage::disk('public')->delete($photo->path);
        }
        return redirect()->route('photo.create');
    }
}
