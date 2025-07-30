<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usertype
 *
 * @property int $id_usertype
 * @property string $usertype_name
 *
 * @package App\Models
 */
class Usertype extends Model
{
	protected $table = 'usertype';
	protected $primaryKey = 'id_usertype';
	public $timestamps = false;

	protected $fillable = [
		'usertype_name'
	];

    protected $casts = [
		'id_usertype' => 'int',
	];

    public function menu()
    {
        return $this->belongsToMany(Menu::class, 'menu_access', 'usertype_id', 'menu_id', 'id_usertype', 'id_menu');
    }

    public function subMenu()
    {
        return $this->belongsToMany(Submenu::class, 'menu_access', 'usertype_id', 'submenu_id', 'id_usertype', 'id_submenu');
    }
}
