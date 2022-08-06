<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\EmpolyeeController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');
//Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin');
Route::get('/superadmin', 'SuperadminController@index');

// Route::view('/register','auth.register');
Route::get('/logout', 'Auth\LoginController@logout');

Route::view('/employee','employee.employee');
Route::get('/employee', 'EmployeeController@show');
Route::get('/delete_employee/{id}', 'EmployeeController@delete');

Route::view('/table0','tables.table0');                            //Insert Table page
Route::post('/table0', 'TableController@table0');                  //Inserted Data and directed to Controller
Route::view('/show0','show.table0');                               //Showing the inserted data and another page
Route::get('/show0', 'TableController@show0');                     //Collected data from the controller
Route::get('/delete0/{id}', 'TableController@delete0');            //Delete the data by passing it to controller
Route::get('/edit0/{id}', 'TableController@edit0');                //Update the data by passing it to controller
Route::post('/update0', 'TableController@update0');                //Submitting the edited data to controller


Route::view('/table1','tables.table1');
Route::post('/table1', 'TableController@table1');
Route::view('/show1','show.table1');
Route::get('/show1', 'TableController@show1');
Route::get('/delete1/{id}', 'TableController@delete1');
Route::get('/edit1/{id}', 'TableController@edit1');
Route::post('/update1', 'TableController@update1');

Route::view('/table2','tables.table2');
Route::post('table2', 'TableController@table2');
Route::view('/show2','show.table2');
Route::get('/show2', 'TableController@show2');
Route::get('/delete2/{id}', 'TableController@delete2');
Route::get('/edit2/{id}', 'TableController@edit2');
Route::post('/update2', 'TableController@update2');

Route::view('/table3','tables.table3');
Route::post('table3', 'TableController@table3');
Route::view('/show3','show.table3');
Route::get('/show3', 'TableController@show3');
Route::get('/delete3/{id}', 'TableController@delete3');
Route::get('/edit3/{id}', 'TableController@edit3');
Route::post('/update3', 'TableController@update3');

Route::view('/table4','tables.table4');
Route::post('table4', 'TableController@table4');
Route::view('/show4','show.table4');
Route::get('/show4', 'TableController@show4');
Route::get('/delete4/{id}', 'TableController@delete4');
Route::get('/edit4/{id}', 'TableController@edit4');
Route::post('/update4', 'TableController@update4');

Route::view('/table5','tables.table5');
Route::post('table5', 'TableController@table5');
Route::view('/show5','show.table5');
Route::get('/show5', 'TableController@show5');
Route::get('/delete5/{id}', 'TableController@delete5');
Route::get('/edit5/{id}', 'TableController@edit5');
Route::post('/update5', 'TableController@update5');

Route::view('/table6','tables.table6');
Route::post('table6', 'TableController@table6');
Route::view('/show6','show.table6');
Route::get('/show6', 'TableController@show6');
Route::get('/delete6/{id}', 'TableController@delete6');
Route::get('/edit6/{id}', 'TableController@edit6');
Route::post('/update6', 'TableController@update6');

Route::view('/table7','tables.table7');
Route::post('table7', 'TableController@table7');
Route::view('/show7','show.table7');
Route::get('/show7', 'TableController@show7');
Route::get('/delete7/{id}', 'TableController@delete7');
Route::get('/edit7/{id}', 'TableController@edit7');
Route::post('/update7', 'TableController@update7');

Route::view('/table8','tables.table8');
Route::post('table8', 'TableController@table8');
Route::view('/show8','show.table8');
Route::get('/show8', 'TableController@show8');
Route::get('/delete8/{id}', 'TableController@delete8');
Route::get('/edit8/{id}', 'TableController@edit8');
Route::post('/update8', 'TableController@update8');

Route::view('/table9','tables.table9');
Route::post('table9', 'TableController@table9');
Route::view('/show9','show.table9');
Route::get('/show9', 'TableController@show9');
Route::get('/delete9/{id}', 'TableController@delete9');
Route::get('/edit9/{id}', 'TableController@edit9');
Route::post('/update9', 'TableController@update9');

Route::view('/table10','tables.table10');
Route::post('table10', 'TableController@table10');
Route::view('/show10','show.table10');
Route::get('/show10', 'TableController@show10');
Route::get('/delete10/{id}', 'TableController@delete10');
Route::get('/edit10/{id}', 'TableController@edit10');
Route::post('/update10', 'TableController@update10');

Route::view('/table11','tables.table11');
Route::post('table11', 'TableController@table11');
Route::view('/show11','show.table11');
Route::get('/show11', 'TableController@show11');
Route::get('/delete11/{id}', 'TableController@delete11');
Route::get('/edit11/{id}', 'TableController@edit11');
Route::post('/update11', 'TableController@update11');

Auth::routes();
