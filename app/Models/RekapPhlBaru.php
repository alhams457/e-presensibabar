<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RekapPhlBaru
 *
 * @property int $id
 * @property string|null $tahun
 * @property string|null $bulan
 * @property string|null $nik
 * @property string|null $nama
 * @property int|null $hari_kerja
 * @property int|null $cuti
 * @property int|null $sakit
 * @property int|null $dinas_luar
 * @property int|null $diklat
 * @property int|null $kehadiran
 * @property int|null $tanpa_keterangan
 * @property int|null $tl1
 * @property int|null $tl2
 * @property int|null $tl3
 * @property int|null $tl4
 * @property int|null $psw1
 * @property int|null $psw2
 * @property int|null $psw3
 * @property int|null $psw4
 * @property int|null $kd_opd
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class RekapPhlBaru extends Model
{
	protected $table = 'rekap_phl_baru';
	public $timestamps = false;

	protected $casts = [
		'hari_kerja' => 'int',
		'cuti' => 'int',
		'sakit' => 'int',
		'dinas_luar' => 'int',
		'diklat' => 'int',
		'kehadiran' => 'int',
		'tanpa_keterangan' => 'int',
		'tl1' => 'int',
		'tl2' => 'int',
		'tl3' => 'int',
		'tl4' => 'int',
		'psw1' => 'int',
		'psw2' => 'int',
		'psw3' => 'int',
		'psw4' => 'int',
		'kd_opd' => 'int'
	];

	protected $fillable = [
		'tahun',
		'bulan',
		'nik',
		'nama',
		'hari_kerja',
		'cuti',
		'sakit',
		'dinas_luar',
		'diklat',
		'kehadiran',
		'tanpa_keterangan',
		'tl1',
		'tl2',
		'tl3',
		'tl4',
		'psw1',
		'psw2',
		'psw3',
		'psw4',
		'kd_opd'
	];

    public function userPhl()
    {
        return $this->belongsTo(Userphl::class, 'nik', 'nik');
    }

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }
}
