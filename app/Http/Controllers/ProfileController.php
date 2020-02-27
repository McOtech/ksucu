<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function edit($user){
        $user = User::findOrFail($user);
        $profile = $user->profile;
        return view('admin.user-settings', ['profile' => $profile]);
    }

    public function storeImage(){
        $data = request()->validate([
            'image' => ['required', 'image']
        ]);
        $imagePath = request('image')->store('profilePictures/'.auth()->user()->username, 'public');
        auth()->user()->profile->create(['image' => $imagePath]);
        return redirect('home');
    }

    public function updateImage(){
        $data = request()->validate([
            'image' => ['required', 'image']
        ]);
        $imagePath = request('image')->store('profilePictures/' . auth()->user()->username, 'public');
        auth()->user()->profile->update(['image' => $imagePath]);
        return redirect('home');
    }

    public function storeDetails(){
        auth()->user()->profile->create(request()->all());
        return redirect('home');
    }

    public function updateDetails(){
        auth()->user()->profile->update(request()->all());
        return redirect('home');
    }

    public function storeContacts(){
        auth()->user()->profile->create(request()->all());
        return redirect('home');
    }

    public function updateContacts(){
        auth()->user()->profile->update(request()->all());
        return redirect('home');
    }
}
