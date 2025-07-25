<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Key
 *
 * @property int $id
 * @property int $user_id
 * @property string $key
 * @property int $level
 * @property bool $ignore_limits
 * @property bool $is_private_key
 * @property string|null $ip_addresses
 * @property int $date_created
 *
 * @package App\Models
 */
class Keys extends Model
{
	protected $table = 'keys';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'level' => 'int',
		'ignore_limits' => 'bool',
		'is_private_key' => 'bool',
		'date_created' => 'int'
	];

	protected $fillable = [
		'user_id',
		'key',
		'level',
		'ignore_limits',
		'is_private_key',
		'ip_addresses',
		'date_created'
	];
}
