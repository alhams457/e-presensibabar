<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChangelogApp
 * 
 * @property int $id
 * @property string $changelog_name
 * @property string $changelog_description
 * @property string $changelog_type
 * @property Carbon $changelog_date
 * @property string $created_by
 * @property Carbon $created_at
 * @property string|null $modified_by
 * @property Carbon|null $modified_at
 *
 * @package App\Models
 */
class ChangelogApp extends Model
{
	protected $table = 'changelog_app';
	public $timestamps = false;

	protected $casts = [
		'changelog_date' => 'datetime',
		'modified_at' => 'datetime'
	];

	protected $fillable = [
		'changelog_name',
		'changelog_description',
		'changelog_type',
		'changelog_date',
		'created_by',
		'modified_by',
		'modified_at'
	];
}
