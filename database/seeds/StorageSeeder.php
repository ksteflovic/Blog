<?php

use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    public function run()
    {
        DB::table('storage')->insert([
            'storage_type' => "Test",
            'storage_name'=> "Testovy",
        ]);
    }
}