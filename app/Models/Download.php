<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Download
 * 
 * @property int $id_download
 * @property string $judul
 * @property string $nama_file
 * @property Carbon $tgl_posting
 * @property Carbon $jam
 * @property int $hits
 * @property string $versi
 *
 * @package App\Models
 */
class Download extends Model
{
	protected $table = 'download';
	protected $primaryKey = 'id_download';
	public $timestamps = false;

	protected $casts = [
		'tgl_posting' => 'datetime',
		'jam' => 'datetime',
		'hits' => 'int'
	];

	protected $fillable = [
		'judul',
		'nama_file',
		'tgl_posting',
		'jam',
		'hits',
		'versi'
	];
}
