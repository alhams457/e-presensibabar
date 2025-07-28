<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RefKehadiran
 * 
 * @property int $id
 * @property int $kd_kehadiran
 * @property string $nm_kehadiran
 *
 * @package App\Models
 */
class RefKehadiran extends Model
{
	protected $table = 'ref_kehadiran';
	public $timestamps = false;

	protected $casts = [
		'kd_kehadiran' => 'int'
	];

	protected $fillable = [
		'kd_kehadiran',
		'nm_kehadiran'
	];
}
