<?php
use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Student\studentcontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// frontend routes

Route::get('/' , function(){
    return view('frontend.pages.index');
})->name('home');


Route::get('/about' , function(){
    return view('frontend.pages.about.about_us');
})->name('about');



Route::get('/blogs' , function(){
    return view('frontend.pages.blogs.blog');
})->name('blogs');
Route::get('/blog-details' , function(){
    return view('frontend.pages.blogs.blog_details');
})->name('blog.details');



Route::get('/contact' , function(){
    return view('frontend.pages.contacts.contact');
})->name('contact');





Route::get('/country' , function(){
    return view('frontend.pages.country.country_list');
})->name('country');
Route::get('/country-details' , function(){
    return view('frontend.pages.country.country_details');
})->name('country.details');



Route::get('/team' , function(){
    return view('frontend.pages.teams.team');
})->name('team');
Route::get('/team-details' , function(){
    return view('frontend.pages.teams.team_details');
})->name('team.details');




Route::get('/visa' , function(){
    return view('frontend.pages.visa.visa');
})->name('visa');
Route::get('/visa-details' , function(){
    return view('frontend.pages.visa.visa_details');
})->name('visa.details');














route::get('/admin/deshboard' , [Admincontroller::class, 'index'])->middleware(['auth', 'verified'])->name('admin.deshboard');


route::get('/student-list', [studentcontroller::class, 'index'])->middleware(['auth', 'verified'])->name('student.list');
route::get('/create-student', [studentcontroller::class, 'create'])->middleware(['auth', 'verified'])->name('student.create');
route::post('/student-store', [studentcontroller::class, 'store'])->middleware(['auth', 'verified'])->name('student.store');
route::get('/student-edit/{id}', [studentcontroller::class, 'edit'])->middleware(['auth', 'verified'])->name('student.edit');
route::post('/student-update/{id}', [studentcontroller::class, 'update'])->middleware(['auth', 'verified'])->name('student.update');
route::get('/student-delete/{id}', [studentcontroller::class, 'delete'])->middleware(['auth', 'verified'])->name('student.delete');


