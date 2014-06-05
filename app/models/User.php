<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public static $Rules = array(
		'firstname' => 'required|min:3',
		'lastname' => 'required|min:3',
		'surname' => 'required|min:3|unique:users',
		'email' => 'email|required|min:10|unique:users',
		);

	public static $RulesMsg = array(
		'required' => 'Ce champ  est requis.',
		'min' => 'Ce champ doit contenir :min caractères minimum.',
		'email' => 'Le champ :attribute doit être une adresse e-mail correcte.',
		'surname.unique' => 'Il existe déjà un utilisateur avec ce surnom.',
		'email.unique' => 'Il existe déjà un utilisateur avec cette adresse email.',
		);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public function News() { return $this->hasMany('News', 'id_author'); }
	public function Comments() { return $this->hasMany('Comment', 'id_author'); }
	public function Groups() { return $this->belongsToMany('Group', 'user_group', 'id_user', 'id_group'); }

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}


}