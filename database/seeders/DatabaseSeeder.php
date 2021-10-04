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
        $user = new User;

        $user->name     = 'Daffa Kurnia Fatah';
        $user->username = 'daffakurnia11';
        $user->password = Hash::make('123123123');
        $user->role     = 'Dev';

        $user->save();

        $user = new User;

        $user->name     = 'Anugrah Cahya Kautsar';
        $user->username = 'anugrahck';
        $user->password = Hash::make('qwerty1234');
        $user->role     = 'Dev';

        $user->save();

        
    }
}
