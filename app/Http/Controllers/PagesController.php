<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Point;

class PagesController extends Controller
{
    public function landing()
    {
        return view('main.index', [
            'users' => Point::orderByDesc('point')->limit(10)->get()
        ]);
    }

    public function member()
    {
        return view('main.member');
    }

    public function blog()
    {
        return view('main.blog');
    }

    public function edit()
    {
        return view('main.profile');
    }

    public function aboutus()
    {
        return view('main.aboutus');
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
        return view('main.competitions.fracture_fluid_design', [
            'page_name'     => 'Fracture Fluid Design'
        ]);
    }
    public function paper()
    {
        return view('main.competitions.paper', [
            'page_name'     => 'Paper'
        ]);
    }
    public function smart()
    {
        return view('main.competitions.smart', [
            'page_name'     => 'Smart'
        ]);
    }
    public function case_study()
    {
        return view('main.competitions.case_study', [
            'page_name'     => 'Case Study'
        ]);
    }
    public function business_case()
    {
        return view('main.competitions.business_case', [
            'page_name'     => 'Business Case'
        ]);
    }
    public function oil_rig_design()
    {
        return view('main.competitions.oil_rig_design', [
            'page_name'     => 'Oil Rig Design'
        ]);
    }
    public function stock_trading()
    {
        return view('main.competitions.stock_trading', [
            'page_name'     => 'Stock Trading'
        ]);
    }
}
