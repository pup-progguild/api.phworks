<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Gino I. de Jesus',
            'username' => 'gidj',
            'password' => Hash::make('Jesus'),
            'email' => 'ginodejesus02@gmail.com',
            'contact' => '09308229814',
            'citycode' => 45808,
            'provcode' => 458,
            'profile_summary' => 'Computer Science student in PUP',
            'rating' => 0
        ]);
    }
}
