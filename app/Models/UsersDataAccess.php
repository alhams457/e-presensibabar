<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsersDataAccess
 * 
 * @property int $id_users_data_access
 * @property int $data_access_id
 * @property int $user_id
 *
 * @package App\Models
 */
class UsersDataAccess extends Model
{
	protected $table = 'users_data_access';
	protected $primaryKey = 'id_users_data_access';
	public $timestamps = false;

	protected $casts = [
		'data_access_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'data_access_id',
		'user_id'
	];
}
