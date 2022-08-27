<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Addition
 * 
 * @property int $id
 * @property string|null $faecbook
 * @property string|null $youtube
 * @property string|null $instagram
 * @property string|null $twitter
 * @property int|null $theme
 * @property string|null $type
 * @property int $menu_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Mune $mune
 *
 * @package App\Models
 */
class Addition extends Model
{
	protected $table = 'additions';

	protected $casts = [
		'theme' => 'int',
		'menu_id' => 'int'
	];

	protected $fillable = [
		'faecbook',
		'youtube',
		'instagram',
		'twitter',
		'theme',
		'type',
		'menu_id'
	];

	public function mune()
	{
		return $this->belongsTo(Mune::class, 'menu_id');
	}
}
