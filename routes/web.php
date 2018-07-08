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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Route::namespace('Dashboard')
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group( function() {
        Route::get('/', 'DashboardController@index')->name('index');

        Route::prefix('users')
            ->name('users.')
            ->group( function() {
                Route::get('/', 'UserController@index')->name('index');
            } );

        Route::prefix( 'branches' )
            ->name( 'branches.' )
            ->group( function() {
                Route::get( '/', 'BranchController@index' )->name( 'index' );
            } );

        Route::prefix( 'inventory' )
            ->name( 'inventory.' )
            ->group( function() {
                Route::get( '/', 'InventoryController@index' )->name( 'index' );
            } );
    });
