<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DMSwitch extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'switches';

	protected $fillable = [
	'title',
	'to_email',
	'text',
	'user_id',
	'status'
	];

}
