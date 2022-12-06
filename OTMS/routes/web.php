<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/training-category', [HomeController::class, 'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class, 'allTraining'])->name('training.all');
Route::get('/training-detail', [HomeController::class, 'trainingDetail'])->name('training.detail');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/loginRegistration', [HomeController::class, 'loginRegistration'])->name('loginRegistration');


Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
Route::get('/teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
Route::post('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');



Route::get('/course/add', [CourseController::class, 'index'])->name('course.add');
Route::post('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::get('/course/manage', [CourseController::class, 'manage'])->name('course.manage');
Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/teacher/manage', [TeacherController::class, 'manage'])->name('teacher.manage');
    Route::post('/teacher/index', [TeacherController::class, 'create'])->name('teacher.create');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');



    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/add', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

});




