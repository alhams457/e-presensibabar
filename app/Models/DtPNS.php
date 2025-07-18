<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DtPNS extends Model
{
    protected $table = 'dt_pns';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function tblOpd()
    {
        return $this->hasOne(tblOPD::class, 'kd_opd', 'kd_opd');
    }

    public function getJamAbsenAttribute()
    {
        return JamAbsen::where('kd_presensi', $this->kd_presensi)->where('kd_subpresensi', $this->kd_subpresensi)->first();
    }

    public function getRefKordinatAttribute()
    {
        return RefKordinat::where('kd_opd', $this->kd_opd)->where('id_lokasi', $this->id_lokasi)->first();
    }

    public function getTblnmlokasikantorAttribute()
    {
        return RefKordinat::where('kd_opd', $this->kd_opd)->where('id_lokasi', $this->id_lokasi)->first();
    }
}
