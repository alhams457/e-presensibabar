<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Reedware\LaravelCompositeRelations\HasCompositeRelations;

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
    use HasCompositeRelations;

	protected $table = 'dt_phl';
	public $timestamps = false;

	protected $casts = [
		'id_lokasi' => 'int',
		'kd_opd' => 'int',
		'kd_unit_opd' => 'int',
		'kd_subunit_opd' => 'int',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int',
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

    public function jamAbsen()
    {
        return $this->compositeBelongsTo(JamAbsen::class, ['kd_presensi', 'kd_subpresensi'], ['kd_presensi', 'kd_subpresensi'], 'and');
    }

    public function refKordinat()
    {
        return $this->compositeBelongsTo(RefKordinat::class, ['kd_opd', 'id_lokasi'], ['kd_opd', 'id_lokasi'], 'and');
    }

    public function nmlokasikantor()
    {
        return $this->compositeBelongsTo(Tblnmlokasikantor::class, ['kd_opd', 'id_lokasi'], ['kd_opd', 'id_lokasi'], 'and');
    }
}
