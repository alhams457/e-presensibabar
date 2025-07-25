<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtPn
 *
 * @property int $id
 * @property string $nip
 * @property string $nama
 * @property string|null $jabatan
 * @property string|null $pangkat
 * @property string|null $gol
 * @property int|null $id_lokasi
 * @property int|null $kd_opd
 * @property int|null $kd_unit_opd
 * @property int|null $kd_subunit_opd
 * @property string|null $kd_presensi
 * @property string|null $kd_subpresensi
 * @property int $kd_subsubpresensi
 * @property int $stts_presensi
 * @property string|null $stts_peg
 *
 * @package App\Models
 */
class DtPns extends Model
{
	protected $table = 'dt_pns';
	public $timestamps = false;

	protected $casts = [
		'id_lokasi' => 'int',
		'kd_opd' => 'int',
		'kd_unit_opd' => 'int',
		'kd_subunit_opd' => 'int',
		'kd_subsubpresensi' => 'int',
		'stts_presensi' => 'int'
	];

	protected $fillable = [
		'nip',
		'nama',
		'jabatan',
		'pangkat',
		'gol',
		'id_lokasi',
		'kd_opd',
		'kd_unit_opd',
		'kd_subunit_opd',
		'kd_presensi',
		'kd_subpresensi',
		'kd_subsubpresensi',
		'stts_presensi',
		'stts_peg'
	];

    public function userPns()
    {
        return $this->hasOne(Userpns::class, 'nip', 'nip');
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
