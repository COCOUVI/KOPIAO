<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $telephone
 * @property string|null $photo_path
 * @property int $role_id
 * @property bool $is_active
 * @property Carbon $birthdate
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $bio
 * @property string|null $qualifications
 * @property string|null $subjects
 * @property float|null $rate_per_hour
 * @property string|null $availability
 * @property string|null $city
 * @property string|null $learning_history
 * @property string|null $learning_preference
 * @property float|null $satisfaction_score
 * @property bool $notify_email
 * @property bool $notify_push
 * 
 * @property Role $role
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'role_id' => 'int',
		'is_active' => 'bool',
		'birthdate' => 'datetime',
		'rate_per_hour' => 'float',
		'satisfaction_score' => 'float',
		'notify_email' => 'bool',
		'notify_push' => 'bool'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'firstname',
		'lastname',
		'email',
		'email_verified_at',
		'password',
		'telephone',
		'photo_path',
		'role_id',
		'is_active',
		'birthdate',
		'remember_token',
		'bio',
		'qualifications',
		'subjects',
		'rate_per_hour',
		'availability',
		'city',
		'learning_history',
		'learning_preference',
		'satisfaction_score',
		'notify_email',
		'notify_push'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
}
