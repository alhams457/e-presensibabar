<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 *
 * @property int $id_users
 * @property string $name
 * @property bool $gender
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $username
 * @property string $password
 * @property int $usertype
 * @property bool $is_active
 * @property string|null $photo
 * @property string|null $photo_thumb
 * @property string $ip_add_reg
 * @property string|null $code_activation
 * @property string|null $code_forgotten
 * @property Carbon|null $last_login
 * @property string $created_by
 * @property Carbon $created_at
 * @property string $modified_by
 * @property Carbon|null $modified_at
 * @property bool $is_delete
 * @property string|null $deleted_by
 * @property string|null $deleted_at
 * @property int|null $kd_opd
 * @property int|null $Kd_unit_opd
 * @property int|null $kd_subunit_opd
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use SoftDeletes;
	protected $table = 'users';
	protected $primaryKey = 'id_users';
	public $timestamps = false;

	protected $casts = [
		'gender' => 'bool',
		'usertype' => 'int',
		'is_active' => 'bool',
		'last_login' => 'datetime',
		'modified_at' => 'datetime',
		'is_delete' => 'bool',
		'kd_opd' => 'int',
		'Kd_unit_opd' => 'int',
		'kd_subunit_opd' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'gender',
		'address',
		'phone',
		'email',
		'username',
		'password',
		'usertype',
		'is_active',
		'photo',
		'photo_thumb',
		'ip_add_reg',
		'code_activation',
		'code_forgotten',
		'last_login',
		'created_by',
		'modified_by',
		'modified_at',
		'is_delete',
		'deleted_by',
		'kd_opd',
		'Kd_unit_opd',
		'kd_subunit_opd'
	];

    public function type()
    {
        return $this->hasOne(Usertype::class, 'id_usertype', 'usertype');
    }
}
