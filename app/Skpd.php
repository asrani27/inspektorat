<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skpd extends Model
{
    protected $table = 'skpd';

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function upload()
    {
        return $this->hasMany(Upload::class);
    }
}
