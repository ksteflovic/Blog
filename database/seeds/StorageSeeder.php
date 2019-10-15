<?php


class StorageSeeder
{
    public function run()
    {
        DB::table()->insert([
            'storage_type' => "Test",
            'storage_name'=> "Testovy",
        ]);
    }
}