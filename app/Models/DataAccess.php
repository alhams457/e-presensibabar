<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DataAccess
 * 
 * @property int $id_data_access
 * @property string $data_access_name
 * @property string $color
 *
 * @package App\Models
 */
class DataAccess extends Model
{
	protected $table = 'data_access';
	protected $primaryKey = 'id_data_access';
	public $timestamps = false;

	protected $fillable = [
		'data_access_name',
		'color'
	];
}
