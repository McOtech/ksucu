<?php

namespace App\Http\Controllers;

use App\Cohort;
use App\Membership;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembershipController extends Controller
{
    public function create(){
        $cohorts = Cohort::all();
        // $leaders = DB::table('memberships')->where('post', '<>', 'member')->get();
        $leaders = Membership::where('post', '<>', 'member')->get();
        // dd($leaders);
        return view('admin.leaders', compact('cohorts'))->with(compact('leaders'));
    }

    public function show(User $user){
        $profile = $user->profile;
        return view('admin.user-profile', compact('profile'));
    }

    public function store(){
        $data = request()->validate([
            'username' => ['required', 'string:255'],
            'cohort_id' => ['required', 'integer'],
            'post' => ['required', 'string']
        ]);
        $user = DB::table('users')->where('username', $data['username'])->first();
        Membership::create([
            'user_id' => $user->id,
            'cohort_id' => $data['cohort_id'],
            'post' => $data['post'],
            'right' => "no"
        ]);
        return redirect()->route('leader.create');
    }

    public function update(Membership $leader){
        $data = request()->validate([
            'right' => ['required', 'string']
        ]);
        $leader->update([
            'right' => $data['right']
        ]);
        return redirect()->route('leader.create');
    }

    public function delete(Membership $leader){
        $leader->delete();
        return redirect()->route('leader.create');
    }
}
