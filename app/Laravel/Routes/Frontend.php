<?php

/*,'domain' => env("FRONTEND_URL", "wineapp.localhost.com")*/

Route::group(['as' => "frontend.",
		 'namespace' => "Frontend",
		 'middleware' => ["web"]
		],function() {
		Route::get('/',['as' => "index",'uses' => "HomeController@index"]);
		Route::get('logout',['as' => "logout",'uses' => "AuthController@destroy"]);
		Route::group(['middleware' => ["frontend.guest"],'prefix' => "/",'as' => "auth."],function(){
		Route::get('/login',['as' => "login",'uses' => "AuthController@login"]);
		Route::get('/verification',['as' => "verification",'uses' => "AuthController@verification"]);
		Route::post('/login',['uses' => "AuthController@authenticate"]);
		Route::get('/register',['as' => "register",'uses' => "AuthController@register"]);
		Route::post('register',['as' => "store",'uses' => "AuthController@store"]);
		Route::get('email-verification/{id?}',['as' => "email_verification",'uses' => "AuthController@email_verification"]);
		Route::get('confirmation/{id?}',['as' => "confirmation",'uses' => "AuthController@confirmation"]);
		Route::post('send-confirmation',['as' => "send_confirmation",'uses' => "AuthController@send_confirmation"]);
	});
	
	Route::group(['middleware' => ["frontend.auth"],'prefix' => "/video",'as' => "video."],function(){
		Route::get('/',['as' => "index",'uses' => "VideoController@index"]);
		Route::post('upload',['as'=>"upload",'uses' => "VideoController@store"]);
		Route::post('like',['as'=>"like",'uses' => "VideoController@like"]);
		Route::post('comment',['as'=>"comment",'uses' => "VideoController@post_comment"]);
		Route::post('video-view',['as'=>"video_view",'uses' => "VideoController@video_view"]);
	});

		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/",'as' => "become_pazepro."],function(){
			Route::get('/become-pazepro',['as' => "index",'uses' => "BecomePazeproController@index"]);
			Route::post('/become-pazepro',['as' => "store",'uses' => "BecomePazeproController@store"]);
		});

		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/",'as' => "subscribe."],function(){
			Route::get('/subscribe',['as' => "index",'uses' => "SubscribeController@index"]);
		}); 

		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/booking",'as' => "booking."],function(){
			Route::get('/individual',['as' => "individual",'uses' => "ProfileController@booking_individual"]);
			Route::get('/group',['as' => "group",'uses' => "ProfileController@booking_group"]);
			Route::get('/group/details',['as' => "details",'uses' => "ProfileController@booking_details"]);
		});
		
		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/profile",'as' => "profile."],function(){
			Route::get('/',['as' => "index",'uses' => "ProfileController@index"]);
			Route::get('/trainings',['as' => "trainings",'uses' => "ProfileController@trainings"]);
			Route::get('/training/details/{id?}/{training_id?}',['as' => "training_details",'uses' => "ProfileController@training_details"]);
			Route::get('/videos',['as' => "videos",'uses' => "ProfileController@videos"]);
			Route::get('/video/details',['as' => "video_details",'uses' => "ProfileController@video_details"]);
			Route::get('/reviews',['as' => "reviews",'uses' => "ProfileController@reviews"]);
			
		});

		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/account-settings",'as' => "account_settings."],function(){
	
			Route::get('/change-password',['as' => "change_password",'uses' => "ProfileController@change_password"]);
			Route::get('/update-information',['as' => "update_profile",'uses' => "ProfileController@update_profile"]);
			Route::post('/update-information',['uses' => "ProfileController@update"]);
			Route::get('/transactions',['as' => "transactions",'uses' => "ProfileController@transactions"]);
			Route::get('address',['as' => "address",'uses' => "ProfileController@getCities"]);
		});
		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/rewards",'as' => "rewards."],function(){
			Route::get('/',['as' => "index",'uses' => "RewardsController@index"]);
			Route::get('/details/{id?}',['as' => "details",'uses' => "RewardsController@details"]);
		});

		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/wallet",'as' => "wallet."],function(){
			Route::get('/activity-logs',['as' => "logs",'uses' => "WalletController@logs"]);
			Route::get('/cash-in',['as' => "cash_in",'uses' => "WalletController@cash_in"]);
			Route::post('/cash-in',['uses' => "WalletController@store_cash_in"]);
			Route::post('/callback-url',['as' => "callback_url",'uses' => "WalletController@ipay88_callback_url"]);
			Route::get('/cash-out',['as' => "cash_out",'uses' => "WalletController@cash_out"]);
			Route::post('/checkout',['as'=> "checkout",'uses' => "WalletController@cash_out_checkout"]);
			Route::post('/place-cashout',['as'=>"place_cashout",'uses' => "WalletController@place_checkout"]);
			Route::get('/rewards',['as' => "rewards",'uses' => "WalletController@rewards"]);
			Route::get('/ipay88-straight/{id?}/{method?}/{remarks?}/{amount?}',['as' => "ipay88_straight",'uses' => "WalletController@ipay88_straight"]);
			Route::get('/ipay88-recurring/{price?}',['as' => "ipay88_recurring",'uses' => "WalletController@ipay88_recurring"]);
			Route::post('/ipay88-recurring-response',['as' => "ipay88_recurring_response",'uses' => "WalletController@ipay88_recurring_response"]);
			Route::post('/ipay88-recurring-backend-url',['as' => "ipay88_recurring_backend_url",'uses' => "WalletController@ipay88_recurring_backend_url"]);

		});
			Route::group(['middleware' => ["frontend.auth"],'prefix' => "/my-training",'as' => "my_training."],function(){
				Route::get('/',['as' => "index",'uses' => "MyTrainingController@index"]);
				Route::get('/details/{id?}',['as' => "show",'uses' => "MyTrainingController@show"]);
		});
		Route::group(['middleware' => ["frontend.auth"],'prefix' => "/training",'as' => "training."],function(){
			Route::get('/',['as' => "index",'uses' => "TrainingController@index"]);
			Route::get('/create',['as' => "create",'uses' => "TrainingController@create"]);
			Route::post('store',['as' => "store",'uses' => "TrainingController@store"]);
			Route::get('/details/{id?}',['as' => "show",'uses' => "TrainingController@show"]);
			Route::get('success',['as' => "success",'uses' => "TrainingController@success"]);
			Route::post('address',['as' => "address",'uses' => "TrainingController@getCities"]);
		});
	
	Route::group(['middleware' => ["frontend.auth"],'prefix' => "/pazepro",'as' => "pazepro."],function(){
		Route::get('/',['as' => "index",'uses' => "PazeproController@index"]);
		Route::get('/about/{id?}',['as' => "about",'uses' => "PazeproController@about"]);
		Route::post('/about/{id?}',['as' => "book",'uses' => "PazeproController@book"]);
		Route::get('/list-trainings/{id?}',['as' => "list_trainings",'uses' => "PazeproController@list_trainings"]);
		Route::get('/list-trainings/details/{id?}/{training_id?}',['as' => "details_training",'uses' => "PazeproController@details_training"]);

		Route::get('/list-videos/{id?}',['as' => "list_videos",'uses' => "PazeproController@list_videos"]);
		Route::get('/list-videos/details',['as' => "details_video",'uses' => "PazeproController@details_video"]);
		Route::get('/list-reviews/{id?}',['as' => "list_reviews",'uses' => "PazeproController@list_reviews"]);
		Route::post('/list-reviews/{id?}',['uses' => "PazeproController@reviews_store"]);
		Route::post('/',['uses' => "PazeproController@store"]);
	});

	Route::group(['prefix' => "address",'as' => "address."],function(){
		Route::post('cities',['as' => "cities",'uses' => "AddressController@get_city"]);
	});

	Route::group(['prefix' => "engagement",'as' => "engage."],function(){
		Route::get('store/{traning_id?}/{session_id?}/{user_id?}',['as' => "store",'uses' => "PazeproController@engage"]);
	});

});