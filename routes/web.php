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


//Auth::routes();

Route::get('/', 'indexcontroller@index')->name('home');
Route::get('/services', 'indexcontroller@services')->name('front.services');
Route::get('/service/{id}', 'indexcontroller@service')->name('front.service');
Route::get('/blogs', 'indexcontroller@blogs')->name('front.blogs');
Route::get('/advices', 'indexcontroller@advices')->name('front.advices');
Route::get('/contactus', 'indexcontroller@contactus')->name('front.contactus');
Route::get('/branches', 'indexcontroller@branches')->name('front.branches');
Route::get('/aboutus', 'indexcontroller@aboutus')->name('front.aboutus');
Route::post('/booking/store', 'indexcontroller@booking_store')->name('front.booking.store');
Route::post('/contactus', 'indexcontroller@contactus')->name('front.contactus');
Route::get('/blog/{id}', 'indexcontroller@blog')->name('front.blog');
Route::get('/advice/{id}', 'indexcontroller@advice')->name('front.advice');
Route::post('/contactus/store', 'indexcontroller@contactus_store')->name('front.contactus.store');





// admin
Route::get('/admin/login', 'admin\authcont@login')->name('adminlogin');
Route::post('/admin/login', 'admin\authcont@postIndex')->name('adlogin');


Route::group(['middleware'=>'auth'], function() {

Route::get('admin/index', 'Admin\indexController@index')->name('admin.index');
Route::get('admin', 'Admin\indexController@index')->name('admin.index');
Route::get('/admin/logout', 'admin\authcont@getLogout')->name('getLogout');


Route::get('admin/slide', 'Admin\slideController@index')->name('admin.slide');
Route::get('admin/slide/create', 'Admin\slideController@create')->name('admin.slide.create');
Route::post('admin/slide/store', 'Admin\slideController@store')->name('admin.slide.store');
Route::get('admin/slide/edit/{id}', 'Admin\slideController@edit')->name('admin.slide.edit');
Route::post('admin/slide/update/{id}', 'Admin\slideController@update')->name('admin.slide.update');
Route::get('admin/slide/delete/{id}', 'Admin\slideController@delete')->name('admin.slide.delete');



Route::get('admin/booking', 'Admin\bookingController@index')->name('admin.booking');
Route::get('admin/booking/delete/{id}', 'Admin\bookingController@delete')->name('admin.booking.delete');


Route::get('admin/branche', 'Admin\brancheController@index')->name('admin.branche');
Route::get('admin/branche/create', 'Admin\brancheController@create')->name('admin.branche.create');
Route::post('admin/branche/store', 'Admin\brancheController@store')->name('admin.branche.store');
Route::get('admin/branche/edit/{id}', 'Admin\brancheController@edit')->name('admin.branche.edit');
Route::post('admin/branche/update/{id}', 'Admin\brancheController@update')->name('admin.branche.update');
Route::get('admin/branche/delete/{id}', 'Admin\brancheController@delete')->name('admin.branche.delete');

Route::get('admin/service', 'Admin\serviceController@index')->name('admin.service');
Route::get('admin/service/create', 'Admin\serviceController@create')->name('admin.service.create');
Route::post('admin/service/store', 'Admin\serviceController@store')->name('admin.service.store');
Route::get('admin/service/edit/{id}', 'Admin\serviceController@edit')->name('admin.service.edit');
Route::post('admin/service/update/{id}', 'Admin\serviceController@update')->name('admin.service.update');
Route::get('admin/service/delete/{id}', 'Admin\serviceController@delete')->name('admin.service.delete');

Route::get('admin/testimonial', 'Admin\testimonialController@index')->name('admin.testimonial');
Route::get('admin/testimonial/create', 'Admin\testimonialController@create')->name('admin.testimonial.create');
Route::post('admin/testimonial/store', 'Admin\testimonialController@store')->name('admin.testimonial.store');
Route::get('admin/testimonial/edit/{id}', 'Admin\testimonialController@edit')->name('admin.testimonial.edit');
Route::post('admin/testimonial/update/{id}', 'Admin\testimonialController@update')->name('admin.testimonial.update');
Route::get('admin/testimonial/delete/{id}', 'Admin\testimonialController@delete')->name('admin.testimonial.delete');

Route::get('admin/advice', 'Admin\adviceController@index')->name('admin.advice');
Route::get('admin/advice/create', 'Admin\adviceController@create')->name('admin.advice.create');
Route::post('admin/advice/store', 'Admin\adviceController@store')->name('admin.advice.store');
Route::get('admin/advice/edit/{id}', 'Admin\adviceController@edit')->name('admin.advice.edit');
Route::post('admin/advice/update/{id}', 'Admin\adviceController@update')->name('admin.advice.update');
Route::get('admin/advice/delete/{id}', 'Admin\adviceController@delete')->name('admin.advice.delete');

Route::get('admin/faq', 'Admin\faqController@index')->name('admin.faq');
Route::get('admin/faq/create', 'Admin\faqController@create')->name('admin.faq.create');
Route::post('admin/faq/store', 'Admin\faqController@store')->name('admin.faq.store');
Route::get('admin/faq/edit/{id}', 'Admin\faqController@edit')->name('admin.faq.edit');
Route::post('admin/faq/update/{id}', 'Admin\faqController@update')->name('admin.faq.update');
Route::get('admin/faq/delete/{id}', 'Admin\faqController@delete')->name('admin.faq.delete');

Route::get('admin/blog', 'Admin\blogController@index')->name('admin.blog');
Route::get('admin/blog/create', 'Admin\blogController@create')->name('admin.blog.create');
Route::post('admin/blog/store', 'Admin\blogController@store')->name('admin.blog.store');
Route::get('admin/blog/edit/{id}', 'Admin\blogController@edit')->name('admin.blog.edit');
Route::post('admin/blog/update/{id}', 'Admin\blogController@update')->name('admin.blog.update');
Route::get('admin/blog/delete/{id}', 'Admin\blogController@delete')->name('admin.blog.delete');

Route::get('admin/contactus', 'Admin\contactusController@index')->name('admin.contactus');
Route::get('admin/contactus/delete/{id}', 'Admin\contactusController@delete')->name('admin.contactus.delete');

Route::get('admin/aboutus', 'Admin\aboutusController@index')->name('admin.aboutus');
Route::get('admin/aboutus/create', 'Admin\aboutusController@create')->name('admin.aboutus.create');
Route::post('admin/aboutus/store', 'Admin\aboutusController@store')->name('admin.aboutus.store');
Route::get('admin/aboutus/edit/{id}', 'Admin\aboutusController@edit')->name('admin.aboutus.edit');
Route::post('admin/aboutus/update/{id}', 'Admin\aboutusController@update')->name('admin.aboutus.update');
Route::get('admin/aboutus/delete/{id}', 'Admin\aboutusController@delete')->name('admin.aboutus.delete');
 });
