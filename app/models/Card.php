<?php

class Card extends Eloquent {

	public $timestamps = false;

	function make()
	{
		return View::make('modules.card', array('card' => $this));
	}
}