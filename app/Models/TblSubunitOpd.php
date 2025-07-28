<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSubunitOpd
 *
 * @property int $id
 * @property int|null $kd_opd
 * @property int|null $kd_unit_opd
 * @property int|null $kd_subunit_opd
 * @property string|null $nama_subunit_opd
 *
 * @package App\Models
 */
class TblSubunitOpd extends Model
{
	protected $table = 'tbl_subunit_opd';
	public $timestamps = false;

	protected $casts = [
		'kd_opd' => 'int',
		'kd_unit_opd' => 'int',
		'kd_subunit_opd' => 'int'
	];

	protected $fillable = [
		'kd_opd',
		'kd_unit_opd',
		'kd_subunit_opd',
		'nama_subunit_opd'
	];

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }

    public function unitOpd()
    {
        return $this->belongsTo(TblUnitOpd::class, 'kd_unit_opd', 'kd_unit_opd');
    }
}
