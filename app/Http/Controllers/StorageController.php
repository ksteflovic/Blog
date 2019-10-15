<?php


namespace App\Http\Controllers;

use App\Models\Storage;

class StorageController extends Controller
{
    public function test(){
        $newStorage = new Storage();
        $newStorage -> storage_type = str_random();
        $newStorage -> storage_name = str_random();
        $newStorage -> save();
        var_dump($newStorage);
    }
}