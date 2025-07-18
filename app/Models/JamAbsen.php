<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JamAbsen extends Model
{
    protected $table = 'jam_absen';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
