<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblstatusJabatan
 * 
 * @property int $kodejab
 * @property string|null $jenis
 * @property string|null $jabatan
 * @property int|null $kd_presensi
 * @property int|null $kd_subpresensi
 *
 * @package App\Models
 */
class TblstatusJabatan extends Model
{
	protected $table = 'tblstatus_jabatan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'kodejab' => 'int',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int'
	];

	protected $fillable = [
		'kodejab',
		'jenis',
		'jabatan',
		'kd_presensi',
		'kd_subpresensi'
	];
}
