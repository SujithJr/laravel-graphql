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
        $faker = \Faker\Factory::create();
        $pwd = bcrypt('password');

        \App\User::create([
            'name'      => 'Testing',
            'email'     => 'test@test.com',
            'password'  => $pwd
        ]);

        for ($i=0; $i < 10; $i++) {
            \App\User::create([
                'name'      => $faker->name,
                'email'     => $faker->email,
                'password'  => $pwd
            ]);
        }
    }
}
