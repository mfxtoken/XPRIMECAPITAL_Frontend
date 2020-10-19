<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('homepage');

Route::get('/trading/account/open-live-account', 'SiteController@open_live_account')->name('open_live_account');
Route::get('/trading/account/open-demo-account', 'SiteController@open_demo_account')->name('open_demo_account');
Route::get('/trading/account/account-types', 'SiteController@notfound')->name('account_types');

Route::get('/trading/products/forex', 'SiteController@forex')->name('forex');
Route::get('/trading/products/commodities', 'SiteController@notfound')->name('commodities');
Route::get('/trading/products/indices', 'SiteController@notfound')->name('indices');
Route::get('/trading/products/stocks-cfds', 'SiteController@notfound')->name('stocks');
Route::get('/trading/products/cryptocurrencies', 'SiteController@notfound')->name('cryptocurrencies');

Route::get('/platforms/meta-trader-4', 'SiteController@notfound')->name('mt4');
Route::get('/platforms/meta-trader-5', 'SiteController@notfound')->name('mt5');

Route::get('/investments/pamm', 'SiteController@pamm')->name('pamm');
Route::get('/investments/copy-trade', 'SiteController@copy_trade')->name('copy_trade');

Route::get('/analysis', 'SiteController@analysis')->name('analysis');

Route::get('/education', 'SiteController@notfound')->name('education');

Route::get('/partnership/introducing-broker', 'SiteController@broker')->name('broker');
Route::get('/partnership/affiliate', 'SiteController@notfound')->name('affiliate');

Route::get('/research/economic-calendar', 'SiteController@economic_calendar')->name('economic_calendar');
Route::get('/research/news', 'SiteController@news')->name('news');

Route::get('/company', 'SiteController@notfound')->name('company');

Route::get('/legal/cookie-policy', 'SiteController@notfound')->name('cookie_policy');
Route::get('/legal/terms-and-conditions', 'SiteController@notfound')->name('terms_conditions');
Route::get('/legal/privacy-policy', 'SiteController@notfound')->name('privacy_policy');
