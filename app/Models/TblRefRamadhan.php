<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblRefRamadhan
 * 
 * @property int $id
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property string|null $keterangan
 *
 * @package App\Models
 */
class TblRefRamadhan extends Model
{
	protected $table = 'tbl_ref_ramadhan';
	public $timestamps = false;

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'start_date',
		'end_date',
		'keterangan'
	];
}
