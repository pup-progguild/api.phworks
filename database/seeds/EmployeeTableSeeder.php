<?php

use Illuminate\Database\Seeder;
use App\Employee; 

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        Employee::create([
            'field_id' => '5',
            'name' => 'Ben Iglesias',
            'username' => 'ben',
            'password' => Hash::make('Iglesias'),
            'email' => 'ben@gmail.com',
            'contact' => '09362617335',
            'citycode' => 45808,
            'provcode' => 458,
            'career_summary' => 'Carpenter for almost 10 years.',
            'rating' => 0
        ]);
    }
}
