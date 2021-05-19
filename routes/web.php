<?php

Route::get('/', 'selamoji_controller@showIndexPage')->name('home');

Route::get('/selamoji_about_us_page', 'selamoji_controller@showAboutUsPage')->name('about_us');

Route::get('/selamoji_contact_page', 'selamoji_controller@showContactPage')->name('contact');

Route::get('/selamoji_login_page','selamoji_controller@showLoginPage')->name('selamoji_login_page');

Route::get('/selamoji_sine_up_page','selamoji_controller@showSineUpPage')->name('selamoji_sine_up_page');

Route::get('/dashboard','selamoji_controller@showdashboard')->name('selamoji_dashboard');

Route::get('/give_roles','selamoji_controller@showGiveRoles')->name('selamoji_give_roles');

Route::get('user_list','selamoji_controller@showUserList')->name('selamoji_user_list');

Route::get('role_list','selamoji_controller@showRoleList')->name('selamoji_role_list');

Route::get('edit_user_password','selamoji_controller@showChangePassword')->name('get_edit_user_password');

Route::post('edit_user_password/{id}','selamoji_controller@changePassword')->name('edit_user_password');

Route::post('/roles_given','selamoji_controller@give_Roles')->name('selamoji_roles_given');

Route::get('/remove_user','selamoji_controller@showRemoveUser')->name('selamoji_remove_user');

Route::get('/features','selamoji_controller@showFeatures')->name('selamoji_features_page');

Route::get('/settings','selamoji_controller@showSettings')->name('selamoji_settings');

Route::get('/create_roles','selamoji_controller@showMakeRoles')->name('selamoji_make_role');

Route::get('/user_profile','selamoji_controller@showUserProfile')->name('user_profile');

Route::get('/logout','selamoji_controller@logOut')->name('selamoji_user_logout');

Route::get('/update_user_information','selamoji_controller@showUpdateUserInformation')->name('update_user_information');

Route::post('/roles_created','selamoji_controller@make_role')->name('selamoji_roles_created');

Route::get('/welcome_message','selamoji_controller@showWelcomeMessage')->name('welcome_message');

Route::get('/selamoji_privacy_policy_page','selamoji_controller@showPrivacyPolicyPage')->name('selamoji_privacy_policy_page');

Route::get('/delete_user' , 'selamoji_controller@showDeleteUser')->name('delete_user');

Route::resource('/selamoji_user', 'UserController');

Route::post('/selamoji_login_confirm','selamoji_controller@loginConfirm')->name('login_confirm');

Route::post('/selamoji_contact_form','selamoji_controller@store_contact_data')->name('contact_form');

Route::post('/search_user','selamoji_controller@search_user_delete')->name('search_user');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home_auth');



