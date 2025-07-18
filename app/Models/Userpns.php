<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userpns extends Model
{
    protected $table = 'userpns';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function key() {
        return $this->hasOne(Key::class, 'key', 'uuid');
    }
}
