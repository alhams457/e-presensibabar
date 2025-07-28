<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblServerDown
 * 
 * @property int $id_down
 * @property Carbon|null $tgl_down_server
 * @property string|null $img_error
 * @property int|null $stts_pagi
 * @property int|null $stts_siang
 * @property int|null $stts_sore
 *
 * @package App\Models
 */
class TblServerDown extends Model
{
	protected $table = 'tbl_server_down';
	protected $primaryKey = 'id_down';
	public $timestamps = false;

	protected $casts = [
		'tgl_down_server' => 'datetime',
		'stts_pagi' => 'int',
		'stts_siang' => 'int',
		'stts_sore' => 'int'
	];

	protected $fillable = [
		'tgl_down_server',
		'img_error',
		'stts_pagi',
		'stts_siang',
		'stts_sore'
	];
}
