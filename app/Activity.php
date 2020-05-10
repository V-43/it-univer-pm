<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function Tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
}
