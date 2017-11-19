<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $table = 'boat';
    public $timestamps = false;

    public function workers()
    {
        return $this->belongsToMany('App\Worker', 'boat_worker', 'boat_id',
            'worker_id');
    }
}
