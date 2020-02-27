<?php

namespace App\Http\Controllers;

use App\Cohort;
use Illuminate\Http\Request;

class CohortController extends Controller
{
    private $template = ['ministry.create', 'committee.create', 'board.create'];

    public function show(Cohort $cohort){
        return view('admin.groupDashboard', compact('cohort'));
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
            $imagePath = request('image')->store('ministry', 'public');
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

    public function update($cohort){
        $cohort = Cohort::findOrFail($cohort);
        $data = request()->validate([
            'image' => ['image'],
            'name' => ['required', 'max:255'],
            'about' => ['required'],
            'category' => 'required',
            'img' => 'string'
        ]);

        if (request('image') != null) {
            $imagePath = request('image')->store('ministry', 'public');
        }else{
            $imagePath = $data['img'];
        }

        try {
            $cohort->update([
                'image' => $imagePath,
                'name' => $data['name'],
                'about' => $data['about'],
                'category' => $data['category']
            ]);
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
    }

    public function delete($cohort){
        $cohort = Cohort::findOrFail($cohort);
        $cohort->delete();

        if ($cohort->category == 'ministry') {
            return redirect()->route($this->template[0]);
        }else if ($cohort->category == 'committee') {
            return redirect()->route($this->template[1]);
        }else{
            return redirect()->route($this->template[2]);
        }
    }
}
