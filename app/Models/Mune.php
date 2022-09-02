<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mune
 * 
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string|null $color
 * @property float|null $price
 * @property string $staus
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $desc
 * @property int $user_id
 * @property int $currint_user
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Mune extends Model
{
	protected $table = 'mune';

	protected $casts = [
		'price' => 'float',
		'user_id' => 'int',
		'currint_user' => 'int',
		'start_date' => 'date:Y-m-d'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'name',
		'logo',
		'color',
		'price',
		'staus',
		'start_date',
		'end_date',
		'desc',
		'user_id',
		'currint_user',
		'text',
		'qr_code',
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function additions()
	{
		return $this->hasOne(Addition::class ,'menu_id');
	}
}
