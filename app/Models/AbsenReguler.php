<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbsenReguler extends Model
{
    protected $table = 'absen_reguler';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
