<?php

namespace App\Http\Controllers;

use App\Cohort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CohortController extends Controller
{
    private $template = ['ministry.create', 'committee.create', 'board.create'];

    public function show(Cohort $cohort){
        return view('admin.groupDashboard', compact('cohort'));
    }

    public function showInfo(Cohort $cohort){
        return view('admin.group-profile', compact('cohort'));
    }

    public function createMinistry(){
        $cohorts = Cohort::all();
        return view('admin.ministries', compact('cohorts'));
    }

    public function createCommittee(){
        $cohorts = Cohort::all();
        return view('admin.committees', compact('cohorts'));
    }

    public function createBoard(){
        $cohorts = Cohort::all();
        return view('admin.boards', compact('cohorts'));
    }

    public function store(){
        $data = request()->validate([
            'image' => ['image'],
            'name' => ['required', 'max:255'],
            'about' => ['required'],
            'category' => 'required',
            'img' => 'string'
        ]);
        if (request('image') != null) {
            $imagePath = request('image')->store('cohort/coverImages', 'public');
        }else{
            $imagePath = "undraw_posting_photo.svg";
        }
        try {
            Cohort::create([
                'image' => $imagePath,
                'name' => $data['name'],
                'about' => $data['about'],
                'category' => $data['category']
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }

        if ($data['category'] == 'ministry') {
            return redirect()->route($this->template[0]);
        }else if ($data['category'] == 'committee') {
            return redirect()->route($this->template[1]);
        }else{
            return redirect()->route($this->template[2]);
        }
    }

    public function update(Cohort $cohort){
        if (request('name') != null) {
            $data = request()->validate([
                'image' => ['image'],
                'name' => ['required', 'max:255'],
                'about' => ['required'],
                'category' => 'required',
                'img' => 'string'
            ]);

            $previousImagePath = $cohort->image;

            if (request('image') != null) {
                $imagePath = request('image')->store('cohort/coverImages', 'public');
            }else{
                $imagePath = $data['img'];
            }

            try {
                if($cohort->update([
                    'image' => $imagePath,
                    'name' => $data['name'],
                    'about' => $data['about'],
                    'category' => $data['category']
                ])){
                    Storage::disk('public')->delete('storage/' . $previousImagePath);
                }
            } catch (\Throwable $th) {
                //throw $th;
            }

            if ($cohort->category == 'ministry') {
                return redirect()->route($this->template[0]);
            }else if ($cohort->category == 'committee') {
                return redirect()->route($this->template[1]);
            }else{
                return redirect()->route($this->template[2]);
            }
        }else if(request('about') != null){
            $data = request()->validate([
                'about' => ['required'],
            ]);
            $cohort->update(['about' => $data['about']]);
            return redirect()->route('cohort.edit', compact(('cohort')));
        }else {
            $data = request()->validate([
                'policy' => ['required', 'file'],
            ]);
            $previousPolicyPath = $cohort->policy;
            $policyPath = request('policy')->store('cohort/policies', 'public');
            if($cohort->update(['policy' => $policyPath])){
                Storage::disk('public')->delete('storage/' . $previousPolicyPath);
            }
            return redirect()->route('cohort.edit', compact(('cohort')));
        }


    }

    public function delete(Cohort $cohort){
        $imagePath = $cohort->image;
        if($cohort->delete()){
            Storage::disk('public')->delete('storage/' . $imagePath);
        }

        if ($cohort->category == 'ministry') {
            return redirect()->route($this->template[0]);
        }else if ($cohort->category == 'committee') {
            return redirect()->route($this->template[1]);
        }else{
            return redirect()->route($this->template[2]);
        }
    }
}
