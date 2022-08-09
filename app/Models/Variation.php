<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Variation
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property int $req
 * @property int $sort
 * @property int $item_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Item $item
 * @property Collection|VariationsAdd[] $variations_adds
 *
 * @package App\Models
 */
class Variation extends Model
{
	protected $table = 'variations';

	protected $casts = [
		'req' => 'int',
		'sort' => 'int',
		'item_id' => 'int'
	];

	protected $fillable = [
		'title_ar',
		'title_en',
		'req',
		'sort',
		'item_id'
	];

	public function item()
	{
		return $this->belongsTo(Item::class);
	}

	public function variations_adds()
	{
		return $this->hasMany(VariationsAdd::class, 'variations_id');
	}
}
