<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $email
 * @property string|null $phone
 * @property Carbon|null $date_of_birth
 * @property string|null $social_facebook_url
 * @property string|null $social_instagram_url
 * @property string|null $social_linkedin_url
 * @property string|null $social_twitter_url
 * @property string|null $social_custom_url
 * @property string|null $notes
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $address
 * @property string|null $profile_picture_relative_url
 * @property string|null $likes
 * @property string|null $dislikes
 * @property int|null $created_by_id
 * @property string|null $token
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * 
 * @property User|null $user
 * @property Collection|Allergy[] $allergies
 * @property Collection|ClientContact[] $client_contacts
 * @property Collection|Diet[] $diets
 * @property Collection|ClientDocument[] $client_documents
 * @property Collection|ClientEvent[] $client_events
 * @property Collection|ClientTag[] $client_tags
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';

	protected $casts = [
		'created_by_id' => 'int'
	];

	protected $dates = [
		'date_of_birth'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'email',
		'phone',
		'date_of_birth',
		'social_facebook_url',
		'social_instagram_url',
		'social_linkedin_url',
		'social_twitter_url',
		'social_custom_url',
		'notes',
		'address',
		'profile_picture_relative_url',
		'likes',
		'dislikes',
		'created_by_id',
		'token',
		'first_name',
		'middle_name',
		'last_name'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by_id');
	}

	public function allergies()
	{
		return $this->belongsToMany(Allergy::class, 'client_allergy')
					->withPivot('id')
					->withTimestamps();
	}

	public function client_contacts()
	{
		return $this->hasMany(ClientContact::class);
	}

	public function diets()
	{
		return $this->belongsToMany(Diet::class)
					->withPivot('id')
					->withTimestamps();
	}

	public function client_documents()
	{
		return $this->hasMany(ClientDocument::class);
	}

	public function client_events()
	{
		return $this->hasMany(ClientEvent::class);
	}

	public function client_tags()
	{
		return $this->hasMany(ClientTag::class);
	}
}
