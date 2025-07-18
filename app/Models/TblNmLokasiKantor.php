<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblNmLokasiKantor extends Model
{
    protected $table = 'tblnmlokasikantor';
    protected $primaryKey = 'id_lokasi';

    public $timestamps = false;
}
