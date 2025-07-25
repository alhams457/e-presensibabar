<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RekapPn
 *
 * @property int $id
 * @property string|null $tahun
 * @property string|null $bulan
 * @property string|null $nip
 * @property string|null $nama
 * @property string|null $hari_kerja
 * @property string|null $cuti
 * @property string|null $sakit
 * @property string|null $dinas_luar
 * @property string|null $diklat
 * @property string|null $kehadiran
 * @property string|null $tanpa_keterangan
 * @property string|null $tl1
 * @property string|null $tl2
 * @property string|null $tl3
 * @property string|null $tl4
 * @property string|null $psw1
 * @property string|null $psw2
 * @property string|null $psw3
 * @property string|null $psw4
 * @property string|null $kd_opd
 *
 * @package App\Models
 */
class RekapPns extends Model
{
	protected $table = 'rekap_pns';
	public $timestamps = false;

	protected $fillable = [
		'tahun',
		'bulan',
		'nip',
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

    public function userPns()
    {
        return $this->belongsTo(Userpns::class, 'nip', 'nip');
    }

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }
}
