<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblstatusSubpresensiShift
 * 
 * @property int $id
 * @property int $kd_presensi
 * @property string|null $kd_subpresensi
 * @property int $kd_shift
 * @property string|null $nama_shift
 *
 * @package App\Models
 */
class TblstatusSubpresensiShift extends Model
{
	protected $table = 'tblstatus_subpresensi_shift';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'kd_presensi' => 'int',
		'kd_shift' => 'int'
	];

	protected $fillable = [
		'id',
		'kd_presensi',
		'kd_subpresensi',
		'kd_shift',
		'nama_shift'
	];
}
