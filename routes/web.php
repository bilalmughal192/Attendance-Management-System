<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HMS;
use App\Http\Controllers\Main;
use App\Http\Controllers\Report;

Route::get('/', [Main::class, 'loginPage'])->name('login');
Route::get('/login', [Main::class, 'check_user'])->name('check_login');
Route::get('/dashboard', [Main::class, 'dashboardPage'])->name('dashboard')->middleware('auth');
Route::get('/logout',[Main::class,'logout'])->name('logout');




Route::prefix('HMS')->group(function () {
    //Employess Routes
    Route::get('/employees', [HMS::class, 'showEmp'])->name('employees');
    Route::get('/new emp', [HMS::class, 'new_emp'])->name('new_emp');
    Route::post('/save_emp', [HMS::class, 'save_emp'])->name('save_emp');
    Route::get('/emp_edit/{id}', [HMS::class, 'edit_emp'])->name('emp_edit');
    Route::get('/emp_view/{id}', [HMS::class, 'view_emp'])->name('emp_view');
    Route::put('/emp_update/{id}', [HMS::class, 'update_emp'])->name('emp_update');
    Route::get('/emp_del/{id}', [HMS::class, 'del_emp'])->name('emp_del');




    Route::get('/leave', [HMS::class, 'showleave'])->name('leave');






    //user Routes
    Route::get('/user', [HMS::class, 'showuser'])->name('reset_password');
    Route::post('/save_user', [HMS::class, 'save_new_user_password'])->name('save_user');







    //Department Routes
    Route::get('/department', [HMS::class, 'showDept'])->name('dept');
    Route::get('/new_dept', [HMS::class, 'new_Dept'])->name('create_dept');
    Route::post('/save_dept', [HMS::class, 'save_Dept'])->name('save_dept');






    //Designation Routes
    Route::get('/designation', [HMS::class, 'showDesg'])->name('desg');
    Route::get('/new_desg', [HMS::class, 'new_Desg'])->name('new_desg');
    Route::post('/save_desg', [HMS::class, 'save_Desg'])->name('save_desg');
});







    Route::prefix('Reports')->group(function () {
    Route::get('/attendance', [Report::class, 'attpage'])->name('attendance');
    Route::get('/show_attendance', [Report::class, 'show_att'])->name('show_attendance');
    // Route::get('/staff_attendance', [Report::class, 'staffatt'])->name('staff_attendance');
});




Route::fallback(function () {
    return "<h2 center>Page not Found</h2>";
});
