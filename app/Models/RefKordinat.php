<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RefKordinat
 *
 * @property int $id_kordinat
 * @property int|null $kd_opd
 * @property int|null $id_lokasi
 * @property float|null $lat_opd
 * @property float|null $lon_opd
 * @property float $radius
 * @property int $stts_edit
 *
 * @package App\Models
 */
class RefKordinat extends Model
{
	protected $table = 'ref_kordinat';
	protected $primaryKey = 'id_kordinat';
	public $timestamps = false;

	protected $casts = [
		'kd_opd' => 'int',
		'id_lokasi' => 'int',
		'lat_opd' => 'float',
		'lon_opd' => 'float',
		'radius' => 'float',
		'stts_edit' => 'int'
	];

	protected $fillable = [
		'kd_opd',
		'id_lokasi',
		'lat_opd',
		'lon_opd',
		'radius',
		'stts_edit'
	];

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }
}
