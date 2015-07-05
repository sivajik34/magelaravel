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
//Entrust::routeNeedsRole('home', array('admin','merchant'), Redirect::to('/'),false);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/admin/manageroles', 'Admin\ManageRolesController@index');
Route::get('/admin/manageroles/activate/{id}', 'Admin\ManageRolesController@update');
Route::get('/admin/manageroles/itemautoenable/{id}', 'Admin\ManageRolesController@itemautoenable');
Route::get('/admin/manageroles/itemautodisable/{id}', 'Admin\ManageRolesController@itemautodisable');
Route::get('/admin/manageitems/merchantitems/{id}', 'Admin\ItemsController@merchantItems');
Route::get('/admin/reports' ,'Admin\ReportsController@index');
Route::get('/admin/manageitems/publishyes/{id}', 'Admin\ItemsController@publishAccept');
Route::get('/admin/manageitems/publishno/{id}', 'Admin\ItemsController@publishReject');
Route::get('/admin/itemsync/{id}', 'Admin\ItemsyncController@index');
Route::post('/admin/sync', 'Admin\ItemsyncController@sync');
Route::post('/admin/itemresync', 'Admin\ItemsyncController@itemresync');
Route::get('/progress', 'Admin\ItemsyncController@getProgress');
Route::get('/admin/customers', 'Admin\CustomersController@index');
Entrust::routeNeedsRole('admin/*', 'admin', Redirect::to('/home'));
Route::get('/merchant/itemsync', 'Merchant\ItemsyncController@index');
Route::post('/merchant/sync', 'Merchant\ItemsyncController@sync');
Route::post('/merchant/itemresync', 'Merchant\ItemsyncController@itemresync');
Route::get('/progress', 'Merchant\ItemsyncController@getProgress');
Route::get('/merchant/manageitems', 'Merchant\ItemsController@index');
Route::get('/merchant/manageitems/requesttopublish/{id}', 'Merchant\ItemsController@requestToPublish');
Route::get('/merchant/manageitems/publishit/{id}', 'Merchant\ItemsController@publishit');
Route::get('/merchant/manageitems/unpublishit/{id}', 'Merchant\ItemsController@unpublishit');
Entrust::routeNeedsRole('merchant/*', 'merchant', Redirect::to('/home'));
