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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     $nama = 'Hafizah Nurmailis';
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

//get->nampilin
//post->menangani di database

// Route::get('/', 'PagesController@home');
// Route::get('/about', 'PagesController@about');

// //laravel secara defulth mnggunakan show
// Route::get('/mahasiswa', 'MahasiswaController@index');

// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');

// //menggunakan put atau patch sama aja untuk update
// Route::put('/students/{student}', 'StudentsController@update');

// Route::get('/pegawai', 'PegawaiController@index');
// Route::get('/', function () {
//     return view('home');
// });
//Route::get('/', 'PagesController@home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('/pegawai', 'EmployeesController@index');
Route::get('/pegawai/create', 'EmployeesController@create');
Route::get('/pegawai/{employee}', 'EmployeesController@show');
Route::post('/pegawai', 'EmployeesController@store');
Route::get('/pegawai/{employee}/edit', 'EmployeesController@edit');
Route::put('/pegawai/{employee}', 'EmployeesController@update');
Route::delete('/pegawai/{employee}', 'EmployeesController@destroy');
Route::get('/kgb', 'EmployeesController@process');
Route::get('/kgb/future', 'EmployeesController@future');
Route::get('/kgb/{employee}/processkgb', 'EmployeesController@prokgb');
Route::post('/kgb/{employee}/riwayatcetak', 'EmployeesController@processrun');
//Route::post('/kgb/riwayatcetak', 'EmployeesController@cetak');

//   Route::get('/kgb/riwayatcetak', function () {
//             return view('kgb.riwayatcetak');
//         });







