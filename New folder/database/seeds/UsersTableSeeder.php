<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Virginia',
            'slug' => str_slug('Virginia'),
            'email' => 'virginia@kelmasrecruiters.co.ke',
            'phone' => '+254 799 522052',
            'type' => 'super',
            'email_verified_at' => Carbon\Carbon::now(),
            'password' =>  bcrypt('@virginia2019')
          
        ]);
        App\User::create([
            'name' => 'Developer',
            'slug' => str_slug('24seven Developers'),
            'email' => 'info@24seven.co.ke',
            'phone' => 'n/a',
            'type' => 'super',
            'email_verified_at' => Carbon\Carbon::now(),
            'password' =>  bcrypt('@24seven'),
            'view'=> false
        ]);
       
    }
}
