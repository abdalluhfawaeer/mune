<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Counter
 * 
 * @property int $id
 * @property int $counter
 * @property int $menu_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Mune $mune
 *
 * @package App\Models
 */
class Counter extends Model
{
	protected $table = 'counter';

	protected $casts = [
		'counter' => 'int',
		'menu_id' => 'int'
	];

	protected $fillable = [
		'counter',
		'menu_id'
	];

	public function mune()
	{
		return $this->belongsTo(Mune::class, 'menu_id');
	}
}
