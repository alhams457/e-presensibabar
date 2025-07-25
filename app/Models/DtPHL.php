<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtPhl
 *
 * @property int $id
 * @property string $nik
 * @property string|null $nama
 * @property string|null $jabatan
 * @property int|null $id_lokasi
 * @property string|null $kd_opd
 * @property string|null $kd_unit_opd
 * @property string|null $kd_subunit_opd
 * @property string $kd_presensi
 * @property string $kd_subpresensi
 * @property bool $kd_subsubpresensi
 * @property string|null $stts_peg
 * @property int $stts_presensi
 *
 * @package App\Models
 */
class DtPhl extends Model
{
	protected $table = 'dt_phl';
	public $timestamps = false;

	protected $casts = [
		'id_lokasi' => 'int',
		'kd_subsubpresensi' => 'bool',
		'stts_presensi' => 'int'
	];

	protected $fillable = [
		'nik',
		'nama',
		'jabatan',
		'id_lokasi',
		'kd_opd',
		'kd_unit_opd',
		'kd_subunit_opd',
		'kd_presensi',
		'kd_subpresensi',
		'kd_subsubpresensi',
		'stts_peg',
		'stts_presensi'
	];

    public function userPhl()
    {
        return $this->hasOne(Userphl::class, 'nik', 'nik');
    }

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
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
