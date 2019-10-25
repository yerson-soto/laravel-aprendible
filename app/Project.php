<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'title', 'description', 'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
