<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/admin/manageroles', 'Admin\ManageRolesController@index');
Route::get('/admin/manageroles/activate/{id}', 'Admin\ManageRolesController@update');
Route::get('/admin/manageitems/merchantitems/{id}', 'Admin\ItemsController@merchantItems');
Route::get('/admin/manageitems/publishyes/{id}', 'Admin\ItemsController@publishAccept');
Route::get('/admin/manageitems/publishno/{id}', 'Admin\ItemsController@publishReject');
Entrust::routeNeedsRole('admin/*', 'admin', Redirect::to('/home'));
Route::get('/merchant/itemsync', 'Merchant\ItemsyncController@index');
Route::post('/merchant/sync', 'Merchant\ItemsyncController@sync');
Route::get('/progress', 'Merchant\ItemsyncController@getProgress');
Route::get('/merchant/appendsync', 'Merchant\ItemsyncController@appendSync');
Route::get('/merchant/manageitems', 'Merchant\ItemsController@index');
Route::get('/merchant/manageitems/requesttopublish/{id}', 'Merchant\ItemsController@requestToPublish');
Route::get('/merchant/manageitems/publishit/{id}', 'Merchant\ItemsController@publishit');
Route::get('/merchant/manageitems/unpublishit/{id}', 'Merchant\ItemsController@unpublishit');
Entrust::routeNeedsRole('merchant/*', 'merchant', Redirect::to('/home'));
