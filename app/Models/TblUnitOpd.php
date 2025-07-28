<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblUnitOpd
 *
 * @property int $id
 * @property int|null $kd_opd
 * @property int|null $kd_unit_opd
 * @property string|null $nama_unit_opd
 *
 * @package App\Models
 */
class TblUnitOpd extends Model
{
	protected $table = 'tbl_unit_opd';
	public $timestamps = false;

	protected $casts = [
		'kd_opd' => 'int',
		'kd_unit_opd' => 'int'
	];

	protected $fillable = [
		'kd_opd',
		'kd_unit_opd',
		'nama_unit_opd'
	];

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }

    public function subunitOpd()
    {
        return $this->hasMany(TblSubunitOpd::class, 'kd_unit_opd', 'kd_unit_opd');
    }
}
