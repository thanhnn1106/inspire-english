<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//})->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::match(['get', 'post'], '/member/login', 'Auth\LoginController@memberLogin')->name('member_login');
Route::match(['get', 'post'], '/guest/login', 'Auth\LoginController@guestLogin')->name('guest_login');
Route::match(['get', 'post'], '/member/register', 'Auth\RegisterController@registerMember')->name('member_register');
Route::match(['get', 'post'], '/guest/register', 'Auth\RegisterController@registerGuest')->name('guest_register');

Route::group(['prefix' => 'member', 'middleware' => ['auth', 'auth.member']], function () {
    Route::get('/',                                'Member\HomeController@index')->name('member_dashboard');
    Route::get('/lession-1/vocabulary',            'Member\Lession1Controller@vocabulary')->name('member_lession_1_vocabularies');
    Route::get('/lession-1/introduction',          'Member\Lession1Controller@introduction')->name('member_lession_1_introduction');
    Route::get('/lession-1/introduction-practice', 'Member\Lession1Controller@introductionPractice')->name('member_lession_1_introduction_practice');
    Route::get('/lession-1/country',               'Member\Lession1Controller@country')->name('member_lession_1_countries');
    Route::get('/lession-1/nationality',           'Member\Lession1Controller@nationality')->name('member_lession_1_nationalities');
    Route::get('/lession-1/country-speaking',      'Member\Lession1Controller@countrySpeaking')->name('member_lession_1_country_speaking');
    Route::get('/lession-1/alphabet-sound',        'Member\Lession1Controller@alphabetSound')->name('member_lession_1_alphabet_sound');
    Route::get('/lession-1/question',              'Member\Lession1Controller@question')->name('member_lession_1_question');
    Route::get('/lession-1/how-you-sound',         'Member\Lession1Controller@howYouSound')->name('member_lession_1_how_you_sound');
    Route::get('/lession-1/feedback',              'Member\Lession1Controller@feedback')->name('member_lession_1_feedback');
    Route::get('/lession-1/review',                'Member\Lession1Controller@review')->name('member_lession_1_review');
    Route::get('/lession-1/review-listening',      'Member\Lession1Controller@reviewListening')->name('member_lession_1_review_listening');
    Route::get('/lession-1/review-answer-question','Member\Lession1Controller@reviewAnswerQuestion')->name('member_lession_1_review_answer');
});
Route::group(['prefix' => 'guest', 'middleware' => ['auth', 'auth.guest']], function () {
    Route::get('/', 'Guest\HomeController@index')->name('guest_dashboard');
});


