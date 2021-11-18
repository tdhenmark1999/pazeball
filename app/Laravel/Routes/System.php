<?php

/*,'domain' => env("FRONTEND_URL", "wineapp.localhost.com")*/
Route::group([
		'as' => "system.",
		'namespace' => "System",
		'prefix' => "admin",
		],function() {
			
	Route::group(['middleware'=>['system.guest'],'prefix' => "/",'as' => "auth."],function(){
			Route::get('/',['as' => "login",'uses' => "AuthController@login"]);
			Route::post('/',['uses' => "AuthController@authenticate"]);
		});
		Route::get('logout',['as' => "logout",'uses' => "AuthController@destroy"]);

		Route::group(['middleware'=>['system.auth'], 'prefix' => "/dashboard",'as' => "dashboard."],function(){
			Route::get('/',['as' => "index",'uses' => "DashboardController@index"]);
		
		});
		Route::group(['middleware'=>['system.auth'], 'prefix' => "/become-pazepro",'as' => "become_pazepro."],function(){
			Route::get('/',['as' => "index",'uses' => "BecomePazeproController@index"]);
			Route::get('/details/{id?}',['as' => "details",'uses' => "BecomePazeproController@details"]);
			Route::get('/update/{id?}',['as' => "update",'uses' => "BecomePazeproController@approve"]);
		});
			Route::group(['middleware'=>['system.auth'], 'prefix' => "/transaction",'as' => "transaction."],function(){
			Route::get('/',['as' => "index",'uses' => "TransactionController@index"]);
		
		});

			Route::group(['middleware'=>['system.auth'], 'prefix' => "/parameter",'as' => "parameter."],function(){
				Route::get('/',['as' => "index",'uses' => "ParameterController@index"]);
				Route::get('/create',['as' => "create",'uses' => "ParameterController@create"]);
				Route::get('/update/{id?}',['as' => "edit",'uses' => "ParameterController@edit"]);
				Route::post('/create',['as' => "store",'uses' => "ParameterController@store"]);
				Route::post('/update/{id?}',['uses' => "ParameterController@update"]);
				Route::get('/destroy/{id?}',['as' => "destroy",'uses' => "ParameterController@destroy"]);

		});

		Route::group(['middleware'=>['system.auth'], 'prefix' => "/rewards",'as' => "rewards."],function(){
			Route::get('/',['as' => "index",'uses' => "RewardsController@index"]);
			Route::get('/create',['as' => "create",'uses' => "RewardsController@create"]);
			Route::get('/update/{id?}',['as' => "edit",'uses' => "RewardsController@edit"]);
			Route::post('/create',['as' => "store",'uses' => "RewardsController@store"]);
			Route::post('/update/{id?}',['uses' => "RewardsController@update"]);
			Route::get('/destroy/{id?}',['as' => "destroy",'uses' => "RewardsController@destroy"]);

		});
		
			Route::group(['middleware'=>['system.auth'], 'prefix' => "/wallet-management",'as' => "wallet_management."],function(){
				Route::get('/cash-in',['as' => "cash_in",'uses' => "WalletManagementController@cash_in"]);
				Route::get('/cash-out',['as' => "cash_out",'uses' => "WalletManagementController@cash_out"]);
				Route::get('/cash-out/details/{id?}',['as' => "cash_out_details",'uses' => "WalletManagementController@cash_out_details"]);
				Route::get('/approved/{id?}',['as' => "approved",'uses' => "WalletManagementController@approved"]);
				Route::get('/rewards',['as' => "rewards",'uses' => "WalletManagementController@rewards"]);

		});

		Route::group(['middleware'=>['system.auth'], 'prefix' => "/user-management",'as' => "user_management."],function(){
			Route::get('/pazer',['as' => "pazer",'uses' => "UserManagementController@pazer"]);
			Route::get('/pazepro',['as' => "pazepro",'uses' => "UserManagementController@pazepro"]);
			Route::get('/admin',['as' => "admin",'uses' => "UserManagementController@admin"]);
		
		});
	

});