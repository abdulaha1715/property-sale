<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $page = new Page();
        $page->name = 'Contact Us';
        $page->slug = 'contact-us';
        $page->content = 'lorem';
        $page->save();

        $page = new Page();
        $page->name = 'About Us';
        $page->slug = 'about-us';
        $page->content = 'lorem';
        $page->save();

        $user = new User();
        $user->name = 'Abdulaha Islam';
        $user->email = 'abdulahaislam210917@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('01918786189');
        $user->remember_token = Str::random(10);
        $user->save();



        // \App\Models\User::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Property::factory(50)->create();
        \App\Models\Media::factory(500)->create();
    }
}
