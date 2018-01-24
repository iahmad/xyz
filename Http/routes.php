<?php

Route::group(['middleware' => 'web', 'prefix' => 'xyz', 'namespace' => 'Apps\Xyz\Http\Controllers'], function()
{
    Route::get('/', 'XyzController@index');
});
