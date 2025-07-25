<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbsenRegulerRecovery
 *
 * @property int|null $id
 * @property string $uuid
 * @property string $nip
 * @property string $nama
 * @property float|null $lat
 * @property float|null $lon
 * @property string|null $image
 * @property Carbon $tanggal
 * @property Carbon|null $waktu
 * @property int $status
 * @property Carbon|null $selisih
 * @property int $kd_kehadiran
 * @property string|null $image_upload
 *
 * @package App\Models
 */
class AbsenRegulerRecovery extends Model
{
	protected $table = 'absen_reguler_recovery';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'lat' => 'float',
		'lon' => 'float',
		'tanggal' => 'datetime',
		'waktu' => 'datetime',
		'status' => 'int',
		'selisih' => 'datetime',
		'kd_kehadiran' => 'int'
	];

	protected $fillable = [
		'id',
		'uuid',
		'nip',
		'nama',
		'lat',
		'lon',
		'image',
		'tanggal',
		'waktu',
		'status',
		'selisih',
		'kd_kehadiran',
		'image_upload'
	];

    public function userPns()
    {
        return $this->belongsTo(Userpns::class, 'uuid', 'uuid');
    }
}
