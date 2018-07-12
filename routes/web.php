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

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

   $this->any('historic-search', 'BalanceController@searchHistoric')->name('historic.search');
   $this->get('historic', 'BalanceController@historic')->name('admin.historic');

   $this->post('transfer', 'BalanceController@transferStore')->name('transfer.store');
   $this->post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');
   $this->get('transfer', 'BalanceController@transfer')->name('balance.transfer');

   $this->get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');
   $this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');

   $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
   $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');

   $this->get('balance', 'BalanceController@index')->name('admin.balance');

   $this->get('/', 'AdminController@index')->name('admin.home');

});

$this->get('admin', 'Admin\AdminController@index')->name('admin.home');

Route::get('/','Site\SiteController@index')->name('admin');

$this->post('atualizar-perfil', 'Admin\UserController@profileUpdate')->name('profile.update')->middleware('auth');
$this->get('meu-perfil', 'Admin\UserController@profile')->name('profile')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
