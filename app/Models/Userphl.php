<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userphl extends Model
{
    protected $table = 'userphl';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function key() {
        return $this->hasOne(Keys::class, 'key', 'uuid');
    }

    public function dtPhl()
    {
        return $this->hasOne(DtPHL::class, 'nik', 'nik');
    }
}
