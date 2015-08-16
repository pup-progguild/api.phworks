<?php

use Illuminate\Database\Seeder;
use App\Field;

class FieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Field::truncate();

        Field::create([
            'field_name' => 'foreman',
            'field_desc' => 'a worker, especially a man, who supervises and directs other workers.'
        ]);

        Field::create([
            'field_name' => 'Elevator Installers and Repairers',
            'field_desc' => 'Assemble, install, repair, or maintain electric or hydraulic freight or passenger elevators, escalators, or dumbwaiters.'
        ]);

        Field::create([
            'field_name' => 'Plumber',
            'field_desc' => 'A person who installs and repairs the pipes and fittings of water supply, sanitation, or heating systems.'
        ]);

        Field::create([
            'field_name' => 'Transportation Inspectors',
            'field_desc' => 'Inspect equipment or goods in connection with the safe transport of cargo or people. Includes rail transportation inspectors, such as freight inspectors; rail inspectors; and other inspectors of transportation vehicles, not elsewhere classified.'
        ]);

        Field::create([
            'field_name' => 'Crane Operator',
            'field_desc' => 'A crane operator is someone who uses a crane to transport various objects. There are many different types, makes, models and sizes of cranes, such as mobile cranes, tower cranes, boom trucks and self-erect tower cranes.'
        ]);

        Field::create([
            'field_name' => 'Carpenter',
            'field_desc' => 'A person who makes and repairs wooden objects and structures.'
        ]);

        Field::create([
            'field_name' => 'Gardener',
            'field_desc' => 'A person who tends and cultivates a garden as a pastime or for a living.'
        ]);
    }
}
