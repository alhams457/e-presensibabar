<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TableBasisDatum
 *
 * @property int $id_basis_data
 * @property Carbon|null $tanggal
 * @property string|null $nip
 * @property string|null $nama
 * @property int|null $kd_opd
 * @property int|null $kd_unit_opd
 * @property int|null $kd_subunit_opd
 * @property Carbon|null $pagi
 * @property Carbon|null $siang
 * @property Carbon|null $sore
 * @property Carbon|null $tgl_presensi
 * @property int|null $kd_kehadiran
 * @property int $stts_basis_data
 * @property int $stts_import_data
 * @property int $stts_rekap
 * @property int $stts_ttd_kepala
 * @property int|null $kd_presensi
 * @property int|null $kd_subpresensi
 * @property int|null $bln
 * @property Carbon|null $thn
 * @property int|null $stts_pagi
 * @property int|null $stts_siang
 * @property int|null $stts_sore
 *
 * @package App\Models
 */
class TableBasisData extends Model
{
	protected $table = 'table_basis_data';
	protected $primaryKey = 'id_basis_data';
	public $timestamps = false;

	protected $casts = [
		'tanggal' => 'datetime',
		'kd_opd' => 'int',
		'kd_unit_opd' => 'int',
		'kd_subunit_opd' => 'int',
		'pagi' => 'datetime',
		'siang' => 'datetime',
		'sore' => 'datetime',
		'tgl_presensi' => 'datetime',
		'kd_kehadiran' => 'int',
		'stts_basis_data' => 'int',
		'stts_import_data' => 'int',
		'stts_rekap' => 'int',
		'stts_ttd_kepala' => 'int',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int',
		'bln' => 'int',
		'thn' => 'datetime',
		'stts_pagi' => 'int',
		'stts_siang' => 'int',
		'stts_sore' => 'int'
	];

	protected $fillable = [
		'tanggal',
		'nip',
		'nama',
		'kd_opd',
		'kd_unit_opd',
		'kd_subunit_opd',
		'pagi',
		'siang',
		'sore',
		'tgl_presensi',
		'kd_kehadiran',
		'stts_basis_data',
		'stts_import_data',
		'stts_rekap',
		'stts_ttd_kepala',
		'kd_presensi',
		'kd_subpresensi',
		'bln',
		'thn',
		'stts_pagi',
		'stts_siang',
		'stts_sore'
	];

    public function userPns()
    {
        return $this->belongsTo(Userpns::class, 'nip', 'nip');
    }

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }

    public function unitOpd()
    {
        return $this->belongsTo(TblUnitOpd::class, 'kd_unit_opd', 'kd_unit_opd');
    }

    public function subunitOpd()
    {
        return $this->belongsTo(TblSubunitOpd::class, 'kd_subunit_opd', 'kd_subunit_opd');
    }
}
