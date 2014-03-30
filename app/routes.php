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

function checkmd5($localSum, $path, $conn = 'pantheon')
{
	$remoteSum = null;

	SSH::into($conn)->run('md5sum ' . $path, function($line) use (&$remoteSum)
	{
	    $remoteSum = $line . PHP_EOL;
	});

	$remoteSum = explode(' ', $remoteSum);

	if($remoteSum[0] == $localSum)
		return true;
	else
		return false;
}

Route::get('/', function()
{
	$result = checkmd5('a5d99c8c7cfdb3bd5981ca2553984a84', '~/service332/tf/cfg/server.cfg');

	if($result)
		return 'File is valid.';
	else
		return 'fail';
});