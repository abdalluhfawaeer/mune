<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Viwe
 * 
 * @property int $id
 * @property string $ip_address
 * @property int $menu_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Mune $mune
 *
 * @package App\Models
 */
class Viwe extends Model
{
	protected $table = 'viwes';

	protected $casts = [
		'menu_id' => 'int'
	];

	protected $fillable = [
		'ip_address',
		'menu_id'
	];

	public function mune()
	{
		return $this->belongsTo(Mune::class, 'menu_id');
	}
}
