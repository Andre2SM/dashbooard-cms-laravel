<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Websites routes
Route::get('websites', 'WebsitesController@getAll')->name('getAllWebsites');
Route::get('websites/{id}', 'WebsitesController@getWebsitebyId')->name('getWebsitebyId
');
Route::get('website/{id}', 'WebsitesController@getDomainbyId')->name('getDomainbyId');




Route::get('issues', 'IssuesController@getAll')->name('getAllIssues');