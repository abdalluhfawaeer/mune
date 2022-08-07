<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name_ar
 * @property string $name_en
 * @property string $staus
 * @property int $menu_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Mune $mune
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'category';

	protected $casts = [
		'menu_id' => 'int'
	];

	protected $fillable = [
		'name_ar',
		'name_en',
		'staus',
		'menu_id'
	];

	public function mune()
	{
		return $this->belongsTo(Mune::class, 'menu_id');
	}
}
