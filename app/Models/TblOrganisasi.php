<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblOrganisasi extends Model
{
    // use HasFactory;

    protected $table = 'tbl_opd'; // Nama tabel

    public function users()
    {
        return $this->hasMany(User::class, 'kd_opd', 'kd_opd');
    }

    public static function getOpdWithoutUsers()
    {
        return self::leftJoin('users', 'tbl_opd.kd_opd', '=', 'users.kd_opd')
            ->whereNull('users.kd_opd')
            ->select('tbl_opd.*')
            ->get();
    }
}
