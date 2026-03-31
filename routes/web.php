<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Student\studentcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/admin/deshboard' , [Admincontroller::class, 'index'])->name('admin.deshboard');


route::get('/student-list', [studentcontroller::class, 'index'])->name('student.list');
route::get('/create-student', [studentcontroller::class, 'create'])->name('student.create');
route::post('/student-store', [studentcontroller::class, 'store'])->name('student.store');
route::get('/student-edit/{id}', [studentcontroller::class, 'edit'])->name('student.edit');
route::post('/student-update/{id}', [studentcontroller::class, 'update'])->name('student.update');
route::get('/student-delete/{id}', [studentcontroller::class, 'delete'])->name('student.delete');
