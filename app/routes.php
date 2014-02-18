<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$cards = Card::all();

	$arr = array();
	foreach( $cards as $c )
	{
		array_push( $arr, $c );
	}
	shuffle( $arr );

	$chunks = array_chunk( $arr, 5 );

	$data['p1_cards'] = $chunks[0];
	$data['p2_cards'] = $chunks[1];

	return View::make('layouts.master', $data);
});