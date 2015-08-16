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
            'profile_summary' => 'Computer Science student in PUP Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus a iusto rerum nihil praesentium quas tempora perferendis nulla molestiae earum reiciendis quibusdam sapiente eaque in, eos id quae explicabo quam.',
            'rating' => 0,
            'image' => 'avatar.jpg'
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
            'profile_summary' => 'Carpenter for almost 10 years. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere voluptatum sed optio veniam porro pariatur sint laudantium ad adipisci dignissimos quod ratione accusantium, nihil odio, blanditiis necessitatibus distinctio sapiente eveniet.',
            'tags' => '["roof","holes"]',
            'rating' => 0,
            'image' => 'mat.png'
        ]);

        User::create([
            'field_id' => '3',
            'name' => 'Jose San Juan',
            'username' => 'jose',
            'password' => Hash::make('SanJuan'),
            'email' => 'jose@gmail.com',
            'contact' => '09261328230',
            'citycode' => 45809,
            'provcode' => 458,
            'role' => 'employee',
            'profile_summary' => 'Plumber for almost 10 years. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore qui cumque, sit deleniti aperiam ratione, aliquam! Sed harum totam minus, repudiandae reiciendis saepe omnis? Atque architecto quasi perferendis similique dicta!',
            'tags' => '["leak","pipes"]',
            'rating' => 0,
            'image' => 'konrad.png'
        ]);


        User::create([
            'field_id' => '2',
            'name' => 'James Labnao',
            'username' => 'james_kun',
            'password' => Hash::make('James'),
            'email' => 'tonaraya@gmail.com',
            'contact' => '09158091230',
            'citycode' => 137402,
            'provcode' => 1339,
            'role' => 'employee',
            'profile_summary' => 'Professional Mechanic Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque debitis omnis et ratione sequi atque tempora. Cum perspiciatis optio mollitia, nihil, dolore nam necessitatibus enim perferendis dolores repellat, ex consectetur?',
            'tags' => '["install","assemble", "repair", "maintain", "electric", "elavators", "escalators", "passenger"]',
            'rating' => 5,
            'image' => 'james.png'
        ]);

        User::create([
            'field_id' => '3',
            'name' => 'Noel Escobar',
            'username' => 'noeljr',
            'password' => Hash::make('IAMALJUR'),
            'email' => 'noeljur@gmail.com',
            'contact' => '092351234982',
            'citycode' => 45802,
            'provcode' => 458,
            'role' => 'employee',
            'profile_summary' => 'Experienced Carpenter for 15 years Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel id, fugit possimus culpa ducimus doloribus soluta dolorem incidunt ipsa facere, aperiam corrupti odio reprehenderit dignissimos perspiciatis! Sequi velit modi, ducimus?',
            'tags' => '["roof","holes"]',
            'rating' => 0,
            'image' => 'noel.png'
        ]);

        User::create([
            'field_id' => '7',
            'name' => 'Gerald Cuntapay',
            'username' => 'mmagracia',
            'password' => Hash::make('Magrace'),
            'email' => 'geradthewhite@gmail.com',
            'contact' => '09696996996',
            'citycode' => 137604,
            'provcode' => 1339,
            'role' => 'employee',
            'profile_summary' => 'Green thumb since birth Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem minima in sint aspernatur, dicta optio iusto facilis dolorum delectus. Sint quam dolore saepe debitis cum quod est et commodi porro.',
            'tags' => '["cultivate","water", "garden", "cut", "trim", "crop", "seed"]',
            'rating' => 4,
            'image' => 'gerald.png'
        ]);

        User::create([
            'field_id' => '4',
            'name' => 'Princessdel',
            'username' => 'bendel',
            'password' => Hash::make('princeben'),
            'email' => 'dellabben@gmail.com',
            'contact' => '09251238202',
            'citycode' => 137404,
            'provcode' => 1339,
            'role' => 'employee',
            'profile_summary' => 'Transportation Inspector for almost 5 years. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt tempora iusto quam asperiores, tenetur facere obcaecati non quaerat, sed corporis ex cum, dolorum placeat temporibus quidem explicabo laborum alias enim?',
            'tags' => '["rail","transport", "inspectors", "freight", "vehicles", "inspect"]',
            'rating' => 1,
            'image' => 'del.png'
        ]);


        User::create([
            'field_id' => '5',
            'name' => 'Kristine Bayani',
            'username' => 'kstine',
            'password' => Hash::make('moon'),
            'email' => 'kstinebayan@gmail.com',
            'contact' => '0926969698',
            'citycode' => 45805,
            'provcode' => 458,
            'role' => 'employee',
            'profile_summary' => 'Crane Operator for 2 years. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, ea molestiae obcaecati. Incidunt mollitia consequuntur quam amet beatae, provident voluptas quasi voluptatibus! Eum dignissimos dolore asperiores hic perspiciatis explicabo voluptate?',
            'tags' => '["mobile", "tower", "cranes", "boom", "trucks"]',
            'rating' => 2,
            'image' => 'kristine.png'
        ]);
    }
}
