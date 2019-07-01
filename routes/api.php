<?php

use Illuminate\Http\Request;


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('/users', 'UsersController@index')->name('getAllUsers');
Route::post('users/login', 'UsersController@LoginUser')->name('LoginUserlog');

//websites
Route::get('websites', 'WebsitesController@index')->name('getAllWebsites');
//Route::post('websites/in', 'WebsitesController@store')->name('storeWebsites');
Route::get('websites/{id}', 'WebsitesController@getWebsitebyId')->name('getWebsitebyId');
Route::get('website/{id}', 'WebsitesController@getDomainbyId')->name('getDomainbyId');

//issues
Route::get('issues', 'IssuesController@index')->name('getAllIssues');
//Route::post('issues/in', 'IssuesController@store')->name('storeIssues');
Route::get('issues/{id}', 'IssuesController@getIssuebyId')->name('getIssuebyId');

//tests
Route::get('tests', 'TestsController@index')->name('getAllTests');
//Route::post('tests/in', 'TestsController@store')->name('storeTests');
Route::get('tests/{id}', 'TestsController@getTestbyId')->name('getTestbyId');

//gtmetrixes
Route::get('gtmetrix', 'GtmetrixController@index')->name('getAllGtmetrix');
//Route::post('gtmetrix/in', 'GtmetrixController@store')->name('storeGtmetrix');
Route::get('gtmetrix/{id}', 'GtmetrixController@getGtmetrixbyId')->name('getGtmetrixbyId');

//pagespeeds
Route::get('pagespeed', 'PagespeedController@index')->name('getAllPagespeed');
//Route::post('pagespeed/in', 'PagespeedController@store')->name('storePagespeed');
Route::get('pagespeed/{id}', 'PagespeedController@getPagespeedbyId')->name('getPagespeedbyId');

//pagespeed mobile
Route::get('pagespeedmobile', 'PagespeedmobileController@index')->name('getAllPagespeedmobile');
//Route::post('pagespeedmobile/in', 'PagespeedmobileController@store')->name('storePagespeedmobile');
Route::get('pagespeedmobile/{id}', 'PagespeedmobileController@getPagespeedmobilebyId')->name('getPagespeedmobilebyId');

//pagespeed desktop
Route::get('pagespeeddesktop', 'PagespeeddesktopController@index')->name('getAllPagespeeddesktop');
//Route::post('pagespeeddesktop/in', 'PagespeeddesktopController@store')->name('storePagespeeddesktop');
Route::get('pagespeeddesktop/{id}', 'PagespeeddesktopController@getPagespeeddesktopbyId')->name('getPagespeeddesktopbyId');