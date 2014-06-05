<?php

class Comment extends Eloquent {

	protected $table = 'comments';

	public function User() { return $this->belongsTo('User', 'id_author'); }

	public function News() { return $this->belongsTo('News', 'id_news'); }
}

?>