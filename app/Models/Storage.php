<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $table = "storage";

    protected $fillable = ["storage_type", "storage_name"];
}
