<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile;

        $profile->member_id         = '220210001';
        $profile->student_number    = '2038201057';
        $profile->batch             = '2020';
        $profile->faculty           = 'VOCATION';
        $profile->major             = 'Industrial Mechanical Engineering';
        $profile->phone             = '081615061316';
        $profile->line_id           = 'rizram2001';

        $profile->save();

        $user = new User;

        $user->name     = 'Daffa Kurnia Fatah';
        $user->username = 'daffakurnia11';
        $user->password = Hash::make('123123123');
        $user->role     = 'Dev';

        $user->save();
    }
}
