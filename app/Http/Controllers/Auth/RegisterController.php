<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\File;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function renewal_member()
    {
        return view('auth.renewal_member');
    }

    public function renewal()
    {
        return view('auth.renewal');
    }

    public function renewal_store(Request $request)
    {
        // Validating
        $profileData = $request->validate([
            'student_number' => 'required|max:191|exists:profiles'
        ]);
        $userData = $request->validate([
            'name'              => 'required|max:191',
            'username'          => 'required|max:191|alpha_dash|unique:users',
            'password'          => 'required|min:8',
            'email'             => 'required|email:dns|max:191|unique:users',
        ]);
        $request->validate([
            'payment'           => 'required|mimes:JPG,jpg,png,jpeg|max:2048',
            'screenshot'        => 'required|mimes:JPG,jpg,png,jpeg|max:2048'
        ]);

        // Uploading Files
        if ($request->hasFile('payment') && $request->hasFile('screenshot')) {
            $paymentImage = $request->username . '-payment.' . $request->payment->extension();
            $screenshotImage = $request->username . '-screenshot.' . $request->screenshot->extension();

            // return $request;
            // Inserting Data
            $profileId = Profile::firstWhere('student_number', $request->student_number)->id;

            $userData['password'] = Hash::make($userData['password']);
            $userData['profile_id'] = $profileId;
            $userId = User::create($userData)->id;

            File::create([
                'user_id'       => $userId,
                'payment'       => $paymentImage,
                'screenshot'    => $screenshotImage
            ]);

            $request->payment->move(public_path('files/payment'), $paymentImage);
            $request->screenshot->move(public_path('files/screenshot'), $screenshotImage);
        }
        return redirect('/login')->with('success', 'Registration success! Please login!');
    }

    public function new_member()
    {
        return view('auth.new_member');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function member_store(Request $request)
    {
        // Validating
        $profileData = $request->validate([
            'student_number'    => 'required|max:15|unique:profiles',
            'faculty'           => 'required',
            'batch'             => 'required|digits:4|numeric',
            'major'             => 'required',
            'phone'             => 'required|digits_between:10,13|numeric',
            'line_id'           => 'required|max:255|unique:profiles'
        ]);
        $userData = $request->validate([
            'name'              => 'required|max:255',
            'username'          => 'required|max:255|alpha_dash|unique:users',
            'password'          => 'required|min:8',
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

            // Inserting Data
            $profileId = Profile::create($profileData)->id;

            $userData['password'] = Hash::make($userData['password']);
            $userData['profile_id'] = $profileId;
            $userId = User::create($userData)->id;

            File::create([
                'user_id'       => $userId,
                'payment'       => $paymentImage,
                'screenshot'    => $screenshotImage
            ]);

            $request->payment->move(public_path('files/payment'), $paymentImage);
            $request->screenshot->move(public_path('files/screenshot'), $screenshotImage);
        }

        return redirect('/login')->with('success', 'Registration success! Please login!');
    }
}
