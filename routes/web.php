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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'FrontEndController@index')->name('/');
Route::get('admin-login', 'FrontEndController@adminLogin')->name('admin-login');
Route::get('student-login', 'FrontEndController@studentLogin')->name('student-login');
Route::get('teacher-registration', 'FrontEndController@teacherRegistration')->name('teacher-registration');
Route::get('contuct-us', 'FrontEndController@contuctUs')->name('contuct-us');

Route::get('student-registration', 'FrontEndController@studentRegistration')->name('student-registration');
Route::post('save-student-info', 'FrontEndController@saveStudentInfo')->name('save-student-info');
Route::post('save-teacher-info', 'FrontEndController@saveTeacherInfo')->name('save-teacher-info');

Route::get('register/course/{id}', 'FrontEndController@regCourse')->name('register-course');

Route::get('student-info', 'FrontEndController@studentInfo')->name('student-info');
Route::get('generate-routine', 'FrontEndController@generateRoutine')->name('generate-routine');
Route::get('admin/generate-routine', 'FrontEndController@adminGenerateRoutine')->name('admin-generate-routine');
Route::get('routine', 'FrontEndController@routine')->name('routine');





// Route::get('/home', 'HomeController@index')->name('home');
