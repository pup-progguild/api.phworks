<?php

use Illuminate\Database\Seeder;
use App\ServiceTransaction;

class ServiceTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceTransaction::truncate();

        ServiceTransaction::create([
            'field_id' => '6',
            'user_id' => '1',
            'employee_id' => '2',
            'service_desc' => "I have holes in my roof.",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);
    }
}
