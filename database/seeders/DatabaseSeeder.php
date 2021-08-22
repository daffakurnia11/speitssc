<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

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
        $profile->fullname          = 'Rizky Ramadhan';
        $profile->student_number    = '2038201057';
        $profile->batch             = '2020';
        $profile->faculty           = 'VOCATION';
        $profile->major             = 'Industrial Mechanical Engineering';
        $profile->phone             = '081615061316';
        $profile->line_id           = 'rizram2001';

        $profile->save();
    }
}
