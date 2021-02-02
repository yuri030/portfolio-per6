<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/blog/{slug}', 'HomeController@post');

Route::get('/page1', function () {
    return view('page1');
 });
Route::get('/page2', function () {
    return view('page2');
 });
Route::get('/page3', function () {
    return view('page3');
 });
Route::get('/page4', function () {
    return view('page4');
 });
Route::get('/page5', function () {
    return view('page5');
 });
Route::get('/page6', function () {
    return view('page6');
 });
Route::get('/page7', function () {
    return view('page7');
 });
Route::get('/page8', function () {
    return view('page8');
 });
Route::get('/page9', function () {
    return view('page9');
 });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
