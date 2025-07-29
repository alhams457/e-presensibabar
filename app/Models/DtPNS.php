<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Reedware\LaravelCompositeRelations\HasCompositeRelations;

/**
 * Class DtPns
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
    use HasCompositeRelations;

	protected $table = 'dt_pns';
	public $timestamps = false;

	protected $casts = [
		'id_lokasi' => 'int',
		'kd_opd' => 'int',
		'kd_unit_opd' => 'int',
		'kd_subunit_opd' => 'int',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int',
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
