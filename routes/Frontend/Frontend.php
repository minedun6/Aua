<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */





Route::get('/bo', 'FrontendController@index')->name('index'); //boiler default
Route::get('/', 'FrontendController@vitrine')->name('home');



Route::group(['middleware' => 'guest'], function () {
  Route::group(['namespace' => 'FrontFeatures'], function () {

  Route::get('/register', 'RegistrationController@showRegistration')->name('showregister');


  });
});




Route::get('macros', 'FrontendController@macros')->name('macros');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');



        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});






Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'FrontFeatures', 'as' => 'user.'], function () {

      Route::group(['middleware' => 'access.routeNeedsRole:Architect'], function()
      {

      //Route::get('accueilm', 'DefaultController@indexm')->name('index');
      Route::get('vitrine', 'DefaultController@vitrine')->name('vitrine');
      Route::get('accueil', 'DefaultController@index')->name('accueil');
      Route::get('useraccount/{id}', 'ArchitectProfileController@useraccount')->name('useraccount');
      Route::get('forum', 'DefaultController@forum')->name('useraccount');
      Route::get('appelsoffres', 'DefaultController@appelsoffres')->name('appelsoffres');
      Route::get('appelsoffres/offre', 'DefaultController@offre')->name('offre');

});

    });
});






Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'BackFeatures', 'as' => 'user.'], function () {

//routes used for testing,will be removed/moved somewhere else

Route::group(['middleware' => 'access.routeNeedsRole:MemberSection'], function()
{

Route::get('dash', 'DefaultController@index')->name('dash');
Route::get('subscriptionrequests', 'ArchitectsManagementController@ShowSubscriptionRequests')->name('ShowSubscriptionRequests');
Route::post('subscriptionrequests/validatesubscriptionrequest/{profileId}', 'ArchitectsManagementController@ValidateSubscriptionRequest')->name('ValidateSubscriptionRequest');
Route::post('subscriptionrequests/rejectsubscriptionrequest/{profileId}', 'ArchitectsManagementController@RejectSubscriptionRequest')->name('RejectSubscriptionRequest');
Route::post('subscriptionrequests/validatesubscriptionrequestpayment/{profileId}', 'ArchitectsManagementController@ValidateSubscriptionRequestPayment')->name('ValidateSubscriptionRequestPayment');

Route::get('architects', 'ArchitectsManagementController@architects')->name('architects');
Route::get('userprofile', 'DefaultController@userprofile')->name('userprof');
Route::get('usercard', 'DefaultController@usercard')->name('usercard');

Route::get('tenders', 'TendersController@getall')->name('userappeloffre');
Route::post('addtender', 'TendersController@store')->name('storetender');


/*member section routes */

    Route::get('memberSection/{id}', 'MemberSectionController@Profil');
});


});
});
