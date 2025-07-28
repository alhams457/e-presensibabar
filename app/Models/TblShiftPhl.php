<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblShiftPhl
 * 
 * @property int $id
 * @property int $kd_presensi
 * @property int $kd_subpresensi
 * @property int $kd_shift
 * @property int $nik
 * @property int $tgl
 *
 * @package App\Models
 */
class TblShiftPhl extends Model
{
	protected $table = 'tbl_shift_phl';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int',
		'kd_shift' => 'int',
		'nik' => 'int',
		'tgl' => 'int'
	];

	protected $fillable = [
		'id',
		'kd_presensi',
		'kd_subpresensi',
		'kd_shift',
		'nik',
		'tgl'
	];
}
