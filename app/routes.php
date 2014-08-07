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

View::composer('front.header', function($view){
    $view->with('menus', Menu::where('id_supmenu', '=', null)->get());
});

Route::pattern('id', '[0-9]+');
Route::pattern('title', '[A-Za-z0-9-]+');
Route::pattern('permaLink', '[A-Za-z0-9-]+');

Route::get('/','HomeController@Home');

Route::get('chat', 'ChatController@Home');

Route::any('login', 'UsersController@LoginUser');
Route::get('logout', 'UsersController@LogoutUser');

Route::group(array('before' => 'auth'), function() 
{
	Route::get('monCompte', 'UsersController@MyAccount');

	Route::group(array('prefix' => 'admin'), function()
	{
		Route::get('/', 'AdminController@Home');
		Route::get('/getJsons', 'AsyncController@GetJsons');
		
		Route::get('users/', array('as' => 'adminUserHome', 'uses' => 'AdminUsersController@Home'));
		Route::get('users/add', array('as' => 'AdminAddUser', 'uses' => 'AdminUsersController@AddUser'));
		Route::post('users/add/valid', 'AdminUsersController@AddUserValidation');
		Route::post('users/edit/valid', 'AdminUsersController@EditUserValidation');
		Route::get('users/edit/{id}', array('as' => 'AdminEditUser', 'uses' => 'AdminUsersController@EditUser'));
		Route::post('users/search', 'AdminUsersController@SearchUsers');
		
		Route::get('groups/', array('as' => 'adminGroupHome', 'uses' => 'AdminGroupsController@Home'));
		Route::get('groups/add', array('as' => 'AdminAddGroup', 'uses' => 'AdminGroupsController@AddGroup'));
		Route::post('groups/add/valid', 'AdminGroupsController@AddGroupValidation');
		Route::post('groups/edit/valid', 'AdminGroupsController@EditGroupValidation');
		Route::get('groups/edit/{id}', array('as' => 'AdminEditGroup', 'uses' => 'AdminGroupsController@EditGroup'));
		Route::post('groups/search', 'AdminGroupsController@SearchGroups');
		
		Route::get('rights/', array('as' => 'adminRightHome', 'uses' => 'AdminRightsController@Home'));
		Route::get('rights/add', array('as' => 'AdminAddRight', 'uses' => 'AdminRightsController@AddRight'));
		Route::post('rights/add/valid', 'AdminRightsController@AddRightValidation');
		Route::post('rights/edit/valid', 'AdminRightsController@EditRightValidation');
		Route::get('rights/edit/{id}', array('as' => 'AdminEditRight', 'uses' => 'AdminRightsController@EditRight'));
		Route::post('rights/search', 'AdminRightsController@SearchRights');
		
		Route::get('news/', array('as' => 'adminNewsHome', 'uses' => 'AdminNewsController@Home'));
		Route::get('news/add', array('as' => 'AdminAddNews', 'uses' => 'AdminNewsController@AddNews'));
		Route::post('news/add/valid', 'AdminNewsController@AddNewsValidation');
		Route::post('news/edit/valid', 'AdminNewsController@EditNewsValidation');
		Route::get('news/edit/{id}', array('as' => 'AdminEditNews', 'uses' => 'AdminNewsController@EditNews'));
		Route::post('news/search', 'AdminNewsController@SearchNews');
		
		Route::get('clubs/', array('as' => 'adminClubHome', 'uses' => 'AdminClubsController@Home'));
		Route::get('clubs/add', array('as' => 'AdminAddClub', 'uses' => 'AdminClubsController@AddClub'));
		Route::post('clubs/add/valid', 'AdminClubsController@AddClubValidation');
		Route::post('clubs/edit/valid', 'AdminClubsController@EditClubValidation');
		Route::get('clubs/edit/{id}', array('as' => 'AdminEditClub', 'uses' => 'AdminClubsController@EditClub'));
		Route::post('clubs/search', 'AdminClubsController@SearchClubs');
		
		Route::get('championships/', array('as' => 'adminChampionshipHome', 'uses' => 'AdminChampionshipsController@Home'));
		Route::get('championships/add', array('as' => 'AdminAddChampionship', 'uses' => 'AdminChampionshipsController@AddChampionship'));
		Route::get('championships/teams/{id}', 'AdminChampionshipsController@AssociateTeams');
		Route::post('championships/add/valid', 'AdminChampionshipsController@AddChampionshipValidation');
		Route::post('championships/edit/valid', 'AdminChampionshipsController@EditChampionshipValidation');
		Route::get('championships/edit/{id}', array('as' => 'AdminEditChampionship', 'uses' => 'AdminChampionshipsController@EditChampionship'));
	});
});

Route::get('news/{id}/{title}', array('as' => 'ReadNews', 'uses' => 'NewsController@ShowNews'));
Route::get('news', 'NewsController@Home');
Route::post('editorUpload', 'ToolsController@FroalaUpload');

Route::get('{permaLink}', array('as' => 'Perma', 'uses' => 'ToolsController@RedirectPermaLinks'));

