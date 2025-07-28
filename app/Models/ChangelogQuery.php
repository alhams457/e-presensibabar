<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChangelogQuery
 * 
 * @property int $id
 * @property string $content
 * @property string $created_by
 * @property Carbon $created_at
 * @property string $ip_address
 * @property string $user_agent
 *
 * @package App\Models
 */
class ChangelogQuery extends Model
{
	protected $table = 'changelog_query';
	public $timestamps = false;

	protected $fillable = [
		'content',
		'created_by',
		'ip_address',
		'user_agent'
	];
}
