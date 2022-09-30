<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $masg
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contact';
	public $timestamps = false;

	protected $fillable = [
		'mobile',
		'email',
		'subject',
		'masg',
		'name',
		'created_at',
		'type',
		'status',
	];
}
