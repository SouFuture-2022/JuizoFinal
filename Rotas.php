<?php


return [
	'/' => 'Home@index',
	'/user/create' => 'User@create',
	'/user/[0-9]+' => 'User@show',
	#'/user/[0-9]+/name/[a-z]' => 'User@index'
];