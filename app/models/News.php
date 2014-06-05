<?php

class News extends Eloquent {

	protected $table = 'news';

	public static $Rules = array(
		'title' => 'required|min:3',
		'shortContent' => 'required|max:500',
		'content' => 'required',
		);

	public static $RulesMsg = array(
		'required' => 'Ce champ  est requis.',
		'min' => 'Ce champ doit contenir :min caractères minimum.',
		'max' => 'Ce champ doit contenir :max caractères maximum.',
		'value.unique' => 'Il existe déjà un droit avec cette valeur.',
		);

	public function User() { return $this->belongsTo('User', 'id_author'); }

	public function Comments() { return $this->hasMany('Comment', 'id_news'); }

	public function Views() { return $this->hasMany('NewsLogView', 'id_news'); }

	public function Votes() { return $this->hasMany('NewsLogVote', 'id_news'); }

}