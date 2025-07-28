<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblRkp
 *
 * @property int $id
 * @property string $thn
 * @property string $bln
 * @property string $kd_opd
 * @property string $nip
 * @property string $nama
 * @property string $hari_kerja
 * @property string $cuti
 * @property string $sakit
 * @property string $dinas_luar
 * @property string $kehadiran
 * @property string $tk
 * @property string $tl1
 * @property string $tl2
 * @property string $tl3
 * @property string $tl4
 * @property string $psw1
 * @property string $psw2
 * @property string $psw3
 * @property string $psw4
 * @property int $stts_created
 *
 * @package App\Models
 */
class TblRkp extends Model
{
	protected $table = 'tbl_rkp';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'stts_created' => 'int'
	];

	protected $fillable = [
		'id',
		'thn',
		'bln',
		'kd_opd',
		'nip',
		'nama',
		'hari_kerja',
		'cuti',
		'sakit',
		'dinas_luar',
		'kehadiran',
		'tk',
		'tl1',
		'tl2',
		'tl3',
		'tl4',
		'psw1',
		'psw2',
		'psw3',
		'psw4',
		'stts_created'
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
