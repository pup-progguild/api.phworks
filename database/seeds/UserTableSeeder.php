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
            'field_id' => '1',
            'name' => 'Gino I. de Jesus',
            'username' => 'gidj',
            'password' => Hash::make('Jesus'),
            'email' => 'ginodejesus02@gmail.com',
            'contact' => '09308229814',
            'citycode' => 45808,
            'provcode' => 458,
            'role' => 'client',
            'profile_summary' => 'Computer Science student in PUP',
            'rating' => 0
        ]);


        User::create([
            'field_id' => '6',
            'name' => 'Ben Iglesias',
            'username' => 'ben',
            'password' => Hash::make('Iglesias'),
            'email' => 'ben@gmail.com',
            'contact' => '09362617335',
            'citycode' => 45808,
            'provcode' => 458,
            'role' => 'employee',
            'profile_summary' => 'Carpenter for almost 10 years.',
            'tags' => '["roof","holes"]',
            'rating' => 0
        ]);

        User::create([
            'field_id' => '3',
            'name' => 'Jose San Juan',
            'username' => 'jose',
            'password' => Hash::make('SanJuan'),
            'email' => 'jose@gmail.com',
            'contact' => '09261323230',
            'citycode' => 45809,
            'provcode' => 458,
            'role' => 'employee',
            'profile_summary' => 'Plumber for almost 10 years.',
            'tags' => '["leak","pipes"]',
            'rating' => 0
        ]);
    }
}
