<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'firstname' => "Mickey",
            'lastname'=> "Mouse",
            'email'=> "mickey.mouse@gmail.com",
            'birthday'=> "2018-02-01",
        ]);
    }
}
