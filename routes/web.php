<?php

use Illuminate\Support\Facades\Route;

Route::get('/*', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Auth::routes(['verify' => true]);

Route::get('/', 'ApplicationController@index')->name('index');
Route::get('/download/saveloan_pdf/{lang}', 'ApplicationController@PrintSaveLoanPdf');
Route::get('/download/pinjaman-insidentil', 'PermintaanController@download_pinjaman_insidentil');
Route::get('/download/pinjaman-jangka-pp', 'PermintaanController@download_pinjaman_jangka_pp');

Route::get('profile/history', 'ApplicationController@historyPage')->name('history');
Route::get('profile/about-us', 'ApplicationController@aboutUsPage')->name('about');
Route::get('profile/our-business', 'ApplicationController@ourBusinessPage')->name('business');
Route::get('profile/our-team', 'ApplicationController@managementPage')->name('management');
// Route::get('profile/report-internal', 'ApplicationController@reportInternalPage')->name('report-internal');
// Route::get('profile/report-external', 'ApplicationController@reportExternalPage')->name('report-external');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('product/saving', 'ApplicationController@savingPage')->name('saving');
    Route::get('product/loan', 'ApplicationController@loanPage')->name('loan');
});
Route::get('product/minimart', 'ApplicationController@minimartPage')->name('minimart');
Route::get('product/stationary', 'ApplicationController@stationaryPage')->name('stationary');
Route::get('product/cleaning-service', 'ApplicationController@cleaningServicePage')->name('cleaning-service');
Route::get('product/drinks', 'ApplicationController@drinksPage')->name('drinks');
Route::get('product/driver', 'ApplicationController@driverPage')->name('driver');
Route::get('product/administration-staff', 'ApplicationController@administrationStaffPage')->name('administration-staff');
// Route::get('product/others', 'ApplicationController@othersPage')->name('others');
// Route::get('product/vehicle-registration-service', 'ApplicationController@vehicleRegistrationServicePage')->name('vehicle-registration-service');
Route::get('product/photocopy-machine-rental', 'ApplicationController@photocopyMachineRentalPage')->name('photocopy-machine-rental');
Route::get('product/simpan', 'ApplicationController@simpanPage')->name('simpan');
Route::get('product/surat', 'ApplicationController@suratPage')->name('surat');

// Route::get('member-forum/whistleblower', 'ApplicationController@whistleblowerPage')->name('whistleblower');
// Route::get('member-forum/complaint', 'ApplicationController@complaintPage')->name('complaint');
Route::get('member-forum/faq', 'ApplicationController@faqPage')->name('faq');
// Route::get('member-forum/customer-relationship', 'ApplicationController@customerRelationshipPage')->name('customer-relationship');

Route::get('media/photo-and-video', 'ApplicationController@photoAndVideoPage')->name('photo-video');
Route::get('media/news', 'ApplicationController@newsPage')->name('news');
Route::get('media/news/{artikel}', 'ApplicationController@contentSinglePage');
Route::get('media/announcement', 'ApplicationController@announcementPage')->name('announcement');
Route::get('media/announcement/{artikel}', 'ApplicationController@contentSinglePage');
Route::get('media/award-and-certificate', 'ApplicationController@awardAndCertificatePage')->name('award-certificate');
Route::get('media/calendar', 'ApplicationController@calendarPage')->name('calendar');

Route::get('contact-us', 'ApplicationController@contactUsPage')->name('contact');
Route::post('contact-us', 'PesanController@store');
