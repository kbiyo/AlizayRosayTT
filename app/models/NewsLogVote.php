<?php

class NewsLogVote extends Eloquent {

	protected $table = 'news_logs_votes';

	public function User() { return $this->belongsTo('User', 'id_author'); }

	public function News() { return $this->belongsTo('News', 'id_news'); }

}