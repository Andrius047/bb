<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [

        "name", "description", "location_id", "model_id", "deleted"
    ];
}
