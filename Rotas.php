<?php


return [
	'/' => 'Home@index',
	'/user/create' => 'User@create',
	'/user/[0-9]+' => 'User@show',
	'/login' => 'Login@login'
	#'/user/[0-9]+/name/[a-z]' => 'User@index'
];
