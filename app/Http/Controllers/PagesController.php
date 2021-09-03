<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class PagesController extends Controller
{
    public function landing()
    {
        return view('main.index');
    }

    public function member()
    {
        return view('main.member');
    }

    public function edit()
    {
        return view('main.profile');
    }

    public function store(Request $request)
    {
        $profileData = $request->validate([
            'faculty'           => 'required',
            'batch'             => 'required|digits:4|numeric',
            'major'             => 'required',
            'phone'             => 'required|digits_between:10,13|numeric',
            'line_id'           => 'required|max:255'
        ]);
        $userData = $request->validate([
            'name'              => 'required|max:255',
            'email'             => 'required|email:dns|max:255',
        ]);

        $profileId = auth()->user()->profile_id;
        User::where('profile_id', $profileId)->update($userData);
        Profile::where('id', $profileId)->update($profileData);

        return redirect('/profile');
    }

    public function fracture_fluid_design()
    {
        return view('main.competitions.fracture_fluid_design');
    }
    public function paper()
    {
        return view('main.competitions.paper');
    }
    public function smart()
    {
        return view('main.competitions.smart');
    }
    public function case_study()
    {
        return view('main.competitions.case_study');
    }
    public function business_case()
    {
        return view('main.competitions.business_case');
    }
    public function oil_rig_design()
    {
        return view('main.competitions.oil_rig_design');
    }
    public function stock_trading()
    {
        return view('main.competitions.stock_trading');
    }
}
