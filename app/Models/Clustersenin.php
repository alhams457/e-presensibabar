<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clustersenin
 *
 * @property int $id_cluster_opd
 * @property int $kd_opd
 * @property float $lat_opd
 * @property float $lon_opd
 * @property float $radius
 *
 * @package App\Models
 */
class Clustersenin extends Model
{
	protected $table = 'clustersenin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_cluster_opd' => 'int',
		'kd_opd' => 'int',
		'lat_opd' => 'float',
		'lon_opd' => 'float',
		'radius' => 'float'
	];

	protected $fillable = [
		'id_cluster_opd',
		'kd_opd',
		'lat_opd',
		'lon_opd',
		'radius'
	];

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }
}
