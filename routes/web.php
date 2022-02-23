<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('/','ApplicationController@index')->name('index');

Route::get('profile/history','ApplicationController@historyPage')->name('history');
Route::get('profile/about-us','ApplicationController@aboutUsPage')->name('about');
Route::get('profile/our-business','ApplicationController@ourBusinessPage')->name('business');
Route::get('profile/our-team','ApplicationController@managementPage')->name('management');
Route::get('profile/report','ApplicationController@reportPage')->name('report');

Route::get('product/saving-and-loan','ApplicationController@savingAndLoanPage')->name('saving-loan');
Route::get('product/minimart','ApplicationController@minimartPage')->name('minimart');
Route::get('product/stationary','ApplicationController@stationaryPage')->name('stationary');
Route::get('product/cleaning-service','ApplicationController@cleaningServicePage')->name('cleaning-service');
Route::get('product/gardening','ApplicationController@gardeningPage')->name('gardening');
Route::get('product/driver','ApplicationController@driverPage')->name('driver');
Route::get('product/administration-staff','ApplicationController@administrationStaffPage')->name('administration-staff');
Route::get('product/others','ApplicationController@othersPage')->name('others');
Route::get('product/vehicle-registration-service','ApplicationController@vehicleRegistrationServicePage')->name('vehicle-registration-service');
Route::get('product/photocopy-machine-rental','ApplicationController@photocopyMachineRentalPage')->name('photocopy-machine-rental');

Route::get('member-forum/whistleblower','ApplicationController@whistleblowerPage')->name('whistleblower');
Route::get('member-forum/complaint','ApplicationController@complaintPage')->name('complaint');
Route::get('member-forum/faq','ApplicationController@faqPage')->name('faq');
Route::get('member-forum/customer-relationship','ApplicationController@customerRelationshipPage')->name('customer-relationship');

Route::get('media/photo-and-video','ApplicationController@photoAndVideoPage')->name('photo-video');
Route::get('media/news','ApplicationController@newsPage')->name('news');
Route::get('media/announcement','ApplicationController@announcementPage')->name('announcement');
Route::get('media/award-and-certificate','ApplicationController@awardAndCertificatePage')->name('award-certificate');
Route::get('media/calendar','ApplicationController@calendarPage')->name('calendar');

Route::get('contact-us','ApplicationController@contactUsPage')->name('contact');


