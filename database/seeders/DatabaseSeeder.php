<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use App\Models\Article;
use App\Models\Post;
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
                Article::factory(15)->create();
                User::factory(3)->create();

                // Daffa User
                $user = new User;

                $user->name     = 'Daffa Kurnia Fatah';
                $user->username = 'daffakurnia11';
                $user->password = Hash::make('123123123');
                $user->role     = 'Dev';

                $user->save();

                // General Admin User
                $user = new User;

                $user->name     = 'ADMIN SPE';
                $user->username = 'speitsadmin';
                $user->password = Hash::make('123123123');

                $user->save();

                // Anugrah
                $user = new User;

                $user->name     = 'Anugrah Cahya Kautsar';
                $user->username = 'anugrahck';
                $user->password = Hash::make('qwerty1234');
                $user->role     = 'Dev';

                $user->save();

                // First Post
                $post = new Post;

                $post->title    = 'Fun Facts 1';
                $post->slug     = 'fun-facts-1';
                $post->image    = 'funfacts1.jpg;funfacts2.jpg';
                $post->category = 'Fun Facts';

                $post->save();

                // Second Post
                $post = new Post;

                $post->title    = 'Seize Your Sunday 1';
                $post->slug     = 'seize-your-sunday-1';
                $post->image    = 'seizeyoursunday1.jpg;seizeyoursunday2.jpg';
                $post->category = 'Seize Your Sunday';

                $post->save();
        }
}
