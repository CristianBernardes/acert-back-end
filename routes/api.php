<?php

Route::get('github-users/{user}', 'api\GitHubApiController@searchForUser');
Route::get('get-info', 'api\AcertApiController@getInfo');
