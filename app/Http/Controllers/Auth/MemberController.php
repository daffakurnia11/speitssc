<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\File;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Promise\Create;

class MemberController extends Controller
{
    public function new_member()
    {
        return view('auth.new_member');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validating
        $profileData = $request->validate([
            'fullname'          => 'required|max:255',
            'student_number'    => 'required|max:15|unique:profiles',
            'faculty'           => 'required',
            'batch'             => 'required|digits:4|numeric',
            'major'             => 'required',
            'phone'             => 'required|digits_between:10,13|numeric',
            'line_id'           => 'required|max:255|unique:profiles'
        ]);
        $userData = $request->validate([
            'username'          => 'required|max:255|alpha_dash|unique:users',
            'password'          => 'required',
            'email'             => 'required|email:dns|max:255|unique:users',
        ]);
        $request->validate([
            'payment'           => 'required|mimes:JPG,jpg,png,jpeg|max:2048',
            'screenshot'        => 'required|mimes:JPG,jpg,png,jpeg|max:2048'
        ]);

        // Phone Number Format
        $firstNumber = substr($profileData['phone'], 0, 1);
        if ($firstNumber === '0') {
            $profileData['phone'] = $profileData['phone'];
        } else {
            $profileData['phone'] = '0' . $profileData['phone'];
        }

        // Uploading Files
        if ($request->hasFile('payment') && $request->hasFile('screenshot')) {
            $paymentImage = $request->username . '-payment.' . $request->payment->extension();
            $screenshotImage = $request->username . '-screenshot.' . $request->screenshot->extension();

            $request->payment->move(public_path('files/payment'), $paymentImage);
            $request->screenshot->move(public_path('files/screenshot'), $screenshotImage);

            // Inserting Data
            $profileId = Profile::create($profileData)->id;
            $userData['password'] = Hash::make($userData['password']);
            $userData['profile_id'] = $profileId;
            User::create($userData);
            File::create([
                'profile_id'    => $profileId,
                'payment'       => $paymentImage,
                'screenshot'    => $screenshotImage
            ]);
        }

        return redirect('/login')->with('success', 'Registration success! Please login!');
    }
}
