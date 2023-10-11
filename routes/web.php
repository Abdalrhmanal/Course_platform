<?php

use App\Http\Controllers\course_userController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');

//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::get('/search', [SearchController::class, 'search'])->name('courses.sessions.show');

//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
Route::post('/courses/{course}/register', [CourseController::class, 'register'])->name('courses.register');

// عرض جميع الكورسات
Route::get('/courses1', [CourseController::class, 'index'])->name('courses.index');
Route::get('/', [CourseController::class, 'indexWEL'])->name('welcome');
// عرض كورس محدد
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
// عرض نموذج إضافة كورس جديد
Route::get('/courses/create',[CourseController::class,'create']);
Route::get('/courses1/create', [CourseController::class, 'create'])->name('courses.create');
// حفظ كورس جديد

Route::post('/courses1', [CourseController::class, 'store'])->name('courses.store');
// عرض نموذج تعديل كورس محدد
Route::get('/courses1/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
// تحديث كورس محدد
Route::put('/courses1/{id}', [CourseController::class, 'update'])->name('courses.update');
// حذف كورس محدد
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::get('/purchases', [course_userController::class, 'index'])->name('purchases.index');
Route::get('/purchasesur', [course_userController::class, 'indexur'])->name('purchases.indexur');

//Route::get('/purchases/{id}', [PurchasesController::class, 'show'])->name('purchases.show');

Route::get('/purchases/create', [course_userController::class, 'create'])->name('purchases.create');
Route::post('/purchases/create', [course_userController::class, 'store'])->name('purchases.store');

Route::get('/purchases/{id}/edit', [course_userController::class, 'edit'])->name('purchases.edit');
Route::put('/purchases/{id}', [course_userController::class, 'update'])->name('purchases.update');

Route::delete('/purchases/{id}', [course_userController::class, 'destroy'])->name('purchases.destroy');

//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers.index');
Route::get('/', [TeachersController::class, 'indexWE'])->name('welcome');

Route::get('/teachers/{id}', [TeachersController::class, 'show'])->name('teachers.show');
Route::get('/courses/{id}', [TeachersController::class, 'showCor'])->name('courses.show');
Route::get('/teachers1/create', [TeachersController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeachersController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{id}/edit', [TeachersController::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{id}', [TeachersController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{id}', [TeachersController::class, 'destroy'])->name('teachers.destroy');

//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------


// عرض جلسات محددة تابعة لكورس محدد
Route::get('/courses/{courseId}/sessions', [SessionsController::class, 'index'])->name('courses.sessions.index');
// عرض جلسة محددة تابعة لكورس محدد
Route::get('/courses/{courseId}/sessions/{sessionId}', [SessionsController::class, 'show'])->name('courses.sessions.show');
// إضافة جلسة جديدة لكورس محدد
Route::get('/courses1/{courseId}/sessions/create', [SessionsController::class, 'create'])->name('courses.sessions.create');
Route::post('/courses/{course}/sessions', [SessionsController::class, 'store'])->name('sessions.store');
// تعديل جلسة محددة تابعة لكورس محدد

Route::get('/courses/{course}/sessions/{session}/edit', [SessionsController::class, 'edit'])->name('sessions.edit');
Route::put('/courses/{course}/sessions/{session}', [SessionsController::class, 'update'])->name('sessions.update');
// حذف جلسة محددة تابعة لكورس محدد
Route::delete('/courses/{courseId}/sessions/{sessionId}', [SessionsController::class, 'destroy'])->name('sessions.destroy');

//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
