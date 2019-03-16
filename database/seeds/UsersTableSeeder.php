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
            'name' => 'Sortmasters',
            'slug' => str_slug('Sortmasters'),
            'email' => 'info@sortmasters.co.ke',
            'phone' => '',
            'is_supper' => true,
            'email_verified_at' => Carbon\Carbon::now(),
            'password' =>  bcrypt('@sortmasters')

        ]);
        App\User::create([
            'name' => 'Developer',
            'slug' => str_slug('24seven Developers'),
            'email' => 'info@24seven.co.ke',
            'phone' => 'n/a',
            'is_supper' => true,
            'email_verified_at' => Carbon\Carbon::now(),
            'password' =>  bcrypt('@24seven'),
            'view'=> false
        ]);

    }
}
