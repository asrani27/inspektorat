<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'Kategori';

    public function filewbk()
    {
        return $this->hasMany(FileWbk::class);
    }
    
    public function filewbbm()
    {
        return $this->hasMany(FileWbbm::class);
    }
}
