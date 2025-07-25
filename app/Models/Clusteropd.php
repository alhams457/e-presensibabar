<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clusteropd
 *
 * @property int $id_cluster_opd
 * @property int $kd_opd
 * @property int $kd_unit_opd
 * @property int $kd_subunit_opd
 * @property float|null $lat_opd
 * @property float|null $lon_opd
 * @property float $radius
 *
 * @package App\Models
 */
class Clusteropd extends Model
{
	protected $table = 'clusteropd';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_cluster_opd' => 'int',
		'kd_opd' => 'int',
		'kd_unit_opd' => 'int',
		'kd_subunit_opd' => 'int',
		'lat_opd' => 'float',
		'lon_opd' => 'float',
		'radius' => 'float'
	];

	protected $fillable = [
		'id_cluster_opd',
		'kd_opd',
		'kd_unit_opd',
		'kd_subunit_opd',
		'lat_opd',
		'lon_opd',
		'radius'
	];

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }

    public function unitOpd()
    {
        return $this->belongsTo(TblUnitOpd::class, 'kd_unit_opd', 'kd_unit_opd');
    }

    public function subunitOpd()
    {
        return $this->belongsTo(TblSubunitOpd::class, 'kd_subunit_opd', 'kd_subunit_opd');
    }
}
