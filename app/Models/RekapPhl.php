<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RekapPhl
 *
 * @property int $id
 * @property string|null $tahun
 * @property string|null $bulan
 * @property string|null $nik
 * @property string|null $nama
 * @property string|null $hari_kerja
 * @property string|null $cuti_izin
 * @property string|null $sakit
 * @property string|null $dinas_luar
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
class RekapPhl extends Model
{
	protected $table = 'rekap_phl';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'tahun',
		'bulan',
		'nik',
		'nama',
		'hari_kerja',
		'cuti_izin',
		'sakit',
		'dinas_luar',
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
