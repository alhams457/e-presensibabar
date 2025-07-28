<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $id_company
 * @property string $company_name
 * @property string $company_desc
 * @property string $company_address
 * @property string $company_maps
 * @property string $company_phone
 * @property string $company_phone2
 * @property string $company_fax
 * @property string|null $company_webmail_name
 * @property string|null $company_webmail_pass
 * @property string|null $company_gmail_name
 * @property string|null $company_gmail_pass
 * @property string $company_photo
 * @property string $company_photo_thumb
 * @property string $created_by
 * @property Carbon $created_at
 * @property string $modified_by
 * @property Carbon|null $modified_at
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'company';
	protected $primaryKey = 'id_company';
	public $timestamps = false;

	protected $casts = [
		'modified_at' => 'datetime'
	];

	protected $fillable = [
		'company_name',
		'company_desc',
		'company_address',
		'company_maps',
		'company_phone',
		'company_phone2',
		'company_fax',
		'company_webmail_name',
		'company_webmail_pass',
		'company_gmail_name',
		'company_gmail_pass',
		'company_photo',
		'company_photo_thumb',
		'created_by',
		'modified_by',
		'modified_at'
	];
}
