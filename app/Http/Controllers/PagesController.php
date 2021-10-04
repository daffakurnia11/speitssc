<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Point;
use App\Models\File;
use App\Models\Post;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;

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
        return view('main.blog', [
            'articles' => Article::where('category', 'Petroknowledge')->get()
        ]);
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

        $user = User::firstWhere('id', auth()->user()->id);
        return redirect('/profile')->with('message', "Your Profile has been updated! Thank you, $user->name");
    }

    public function changepass(Request $request)
    {
        $request->validate(
            [
                'oldpass'       => 'required|password',
                'password1'     => 'required|min:8',
                'password2'     => 'required|min:8|same:password1',
            ],
            [
                'oldpass.required' => 'The old password field is required!',
                'password1.required' => 'The new password field is required!',
                'password1.min' => 'The new password must be at least 8 characters.',
                'password2.required' => 'The repeat password field is required!',
                'password2.min' => 'The new password must be at least 8 characters.',
                'password2.same' => 'The password does not match!'
            ]
        );
        $profileId = auth()->user()->profile_id;
        User::where('profile_id', $profileId)->update([
            'password'  => Hash::make($request['password1'])
        ]);

        $user = User::firstWhere('id', auth()->user()->id);
        return redirect('/profile')->with('message', "Your Password has been changed! Thank you and please try to login again, $user->name");
    }

    public function memberidupdate(Profile $profile, Request $request)
    {
        $request->validate([
            'member_id'     => 'required',
            'member_slip'   => 'required|mimes:JPG,jpg,pdf|max:2048',
        ]);

        if ($request->hasFile('member_slip')) {
            $memberslipImage = auth()->user()->username . '-memberslip.' . $request->member_slip->extension();

            $id = auth()->user()->id;

            $profile->update([
                'member_id' => $request->member_id
            ]);
            File::where('user_id', $id)->update([
                'member_slip'   => $memberslipImage
            ]);

            $request->member_slip->move(public_path('files/member_slip'), $memberslipImage);

            $user = auth()->user()->name;
            return redirect('/profile')->with('message', "Your Member ID has been updated! Thank you, $user");
        }
    }

    public function membercard(Profile $profile)
    {
        return view('main.member_card');
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

    public function funfacts()
    {
        return view('main.test', [
            'posts' => Post::where('category', 'Fun Facts')->get()
        ]);
    }

    public function petronews()
    {
        return view('main.petronews', [
            'articles' => Article::where('category', 'Petronews')->get()
        ]);
    }

    public function petroknowledge()
    {
        return view('main.petroknowledge', [
            'articles' => Article::where('category', 'Petroknowledge')->get()
        ]);
    }
    public function petronews_article()
    {
        return view('main.petronews_article', [
            'articles' => Article::where('category', 'Petronews')->get()
        ]);
    }
    
    #Fun Facts
    public function funfacts()
    {
       return view('main.fun-facts', [
            'posts' => Post::where('category', 'Fun Facts')->get()
        ]);
    }

    #Seize Your Sunday
    public function seizeyoursunday()
    {
        return view('main.seizeyoursunday', [
            'posts' => Post::where('category', 'Seize Your Sunday')->get()
        ]);
    }
}
