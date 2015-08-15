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
            'service_desc' => "I have holes in my roof. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, suscipit quia nobis ipsa obcaecati pariatur tempora, recusandae totam repellendus error ratione maxime? Optio assumenda nobis ipsam provident magnam dolore rem!",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);
        
        ServiceTransaction::create([
            'field_id' => '3',
            'user_id' => '1',
            'employee_id' => '3',
            'service_desc' => "leak in my pipes. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis id, delectus dolorum totam explicabo ipsum cumque ad odio assumenda nihil eum, reiciendis incidunt omnis enim in dolores esse mollitia possimus.",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '6',
            'user_id' => '1',
            'employee_id' => '2',
            'service_desc' => "I have a broken window Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos laborum libero voluptates maxime. Voluptate consectetur fugiat error aspernatur, eveniet ab, ipsa voluptatum maxime aut officia commodi minus dolores! Ut, quam.",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '3',
            'user_id' => '1',
            'employee_id' => '3',
            'service_desc' => "My sink has a leak. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo perferendis molestias minima obcaecati laboriosam quam. Veniam alias in eius quae, nemo laboriosam reiciendis repudiandae iusto, amet fugiat asperiores culpa illum. ",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '6',
            'user_id' => '1',
            'employee_id' => '2',
            'service_desc' => "floors have holes Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea veniam asperiores id autem assumenda nesciunt voluptas rerum dolorem hic. Perspiciatis molestias odio, accusantium eveniet sapiente facilis similique, veniam eligendi?",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '7',
            'user_id' => '1',
            'employee_id' => '6',
            'service_desc' => "I need someone to water my plants Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia architecto maiores atque harum, vel dolor odit necessitatibus doloribus! Et sit, deserunt debitis quia rem labore, maxime quibusdam eos nostrum accusamus!",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '2',
            'user_id' => '1',
            'employee_id' => '4',
            'service_desc' => "Repair the elevators Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illum. Quas sint incidunt maiores cupiditate corrupti explicabo alias quo quod aliquid doloribus, distinctio aut laboriosam ea deserunt, hic aspernatur. Doloribus!",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '6',
            'user_id' => '1',
            'employee_id' => '3',
            'service_desc' => "I need someone to fix my roof Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt quidem non laudantium iste, aperiam quae voluptatem, minus voluptate dolorem assumenda! Deserunt necessitatibus veritatis nostrum eaque incidunt, ea, cumque officiis magnam!",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '6',
            'user_id' => '1',
            'employee_id' => '2',
            'service_desc' => "floors are broken",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

        ServiceTransaction:: create([
            'field_id' => '6',
            'user_id' => '1',
            'employee_id' => '2',
            'service_desc' => "floors are broken",
            'user_rate' => '4',
            'employee_rate' => '4'
        ]);

    }
}

