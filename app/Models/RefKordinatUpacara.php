<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RefKordinatUpacara
 * 
 * @property int $id_kordinat_upacara
 * @property float|null $lat_upacara
 * @property float|null $lon_upacara
 * @property float $radius_upacara
 * @property bool $kd_stts_upacara
 * @property string|null $nm_lokasi_upacara
 *
 * @package App\Models
 */
class RefKordinatUpacara extends Model
{
	protected $table = 'ref_kordinat_upacara';
	protected $primaryKey = 'id_kordinat_upacara';
	public $timestamps = false;

	protected $casts = [
		'lat_upacara' => 'float',
		'lon_upacara' => 'float',
		'radius_upacara' => 'float',
		'kd_stts_upacara' => 'bool'
	];

	protected $fillable = [
		'lat_upacara',
		'lon_upacara',
		'radius_upacara',
		'kd_stts_upacara',
		'nm_lokasi_upacara'
	];
}
