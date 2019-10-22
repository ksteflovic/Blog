<?php


namespace App\Http\Controllers;

use App\Models\Storage;

class StorageController extends Controller
{
    public function insert()
    {
        $newStorage = new Storage();
        $newStorage->storage_type = str_random();
        $newStorage->storage_name = str_random();
        $newStorage->save();
        var_dump($newStorage);
    }

    public function delete($id)
    {
        $storage = Storage::find($id);
        if ($storage == null) {
            echo "No id found.";
        } else {
            $storage->delete();
            echo "Deleted successful.";
        }

    }

    public function update($id)
    {
        $storage = Storage::find($id);
        if ($storage == null) {
            echo "Nothing to update.";
        } else {
            $storage->storage_name = "LOL" . str_random();
            $storage->save();
            echo "Updated successful.";
        }
    }

    public function show($id)
    {
        $storage = Storage::find($id);
        if ($storage == null) {
            echo "Nothing there.";
        } else {
            echo $storage->storage_type . "<br>";
            echo $storage->storage_name . "<br>";
        }
    }
}