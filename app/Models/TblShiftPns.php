<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblShiftPn
 *
 * @property int $id
 * @property int $kd_presensi
 * @property int $kd_subpresensi
 * @property int $kd_shift
 * @property int $nip
 * @property int $tgl
 *
 * @package App\Models
 */
class TblShiftPns extends Model
{
	protected $table = 'tbl_shift_pns';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int',
		'kd_shift' => 'int',
		'nip' => 'int',
		'tgl' => 'int'
	];

	protected $fillable = [
		'id',
		'kd_presensi',
		'kd_subpresensi',
		'kd_shift',
		'nip',
		'tgl'
	];
}
