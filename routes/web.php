<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\PdfController;

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



// -------------------- WEBSITE FRONT VIEW --------------------------------
Route::get('/', [ AcademyController::class, 'index' ])->name('home');



// -------------- USER (STUDENT & TEACHER) LOGIN, LOGOUT, REGISTER -----------------
Route::get('/user-login', [ AcademyController::class, 'userLogin' ])->name('user-login');
Route::post('/new-login', [ UserAuthController::class, 'newLogin' ])->name('new-login');

Route::post('/teacher-logout', [ UserAuthController::class, 'teacherLogout' ])->name('teacher-logout');

// -------------------------  FOR ADMIN PANEL ---------------------------------

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ AdminDashboardController::class, 'index' ])->name('dashboard');
    //ADMIN LOGIN, logout PAGE - In the laravel jetstream package

    //ADMIN CREATE & MANAGING NEW ADMINISTRATORS - ADMIN MODULE
    Route::middleware(['auth:sanctum', 'verified','superAdmin'])->get('/add-administrator', [ AdminController::class, 'index' ])->name('add-administrator');
    Route::middleware(['auth:sanctum', 'verified','superAdmin'])->post('/new-administrator', [ AdminController::class, 'create' ])->name('new-administrator');
    Route::middleware(['auth:sanctum', 'verified','superAdmin'])->get('/manage-administrator', [ AdminController::class, 'manage' ])->name('manage-administrator');
    Route::middleware(['auth:sanctum', 'verified','superAdmin'])->get('/edit-administrator/{id}', [ AdminController::class, 'edit' ])->name('edit-administrator');
    Route::middleware(['auth:sanctum', 'verified','superAdmin'])->post('/update-administrator/{id}', [ AdminController::class, 'update' ])->name('update-administrator');
    Route::middleware(['auth:sanctum', 'verified','superAdmin'])->post('/delete-administrator/{id}', [ AdminController::class, 'delete' ])->name('delete-administrator');

    //ADMIN CREATE & MANAGING TEACHERS - TEACHER MODULE
    Route::middleware(['auth:sanctum', 'verified'])->get('/add-teacher', [ TeacherController::class, 'index' ])->name('add-teacher');
    Route::middleware(['auth:sanctum', 'verified'])->post('/new-teacher', [ TeacherController::class, 'create' ])->name('new-teacher');
    Route::middleware(['auth:sanctum', 'verified'])->get('/manage-teacher', [ TeacherController::class, 'manage' ])->name('manage-teacher');
    Route::middleware(['auth:sanctum', 'verified'])->get('/edit-teacher/{id}', [ TeacherController::class, 'edit' ])->name('edit-teacher');
    Route::middleware(['auth:sanctum', 'verified'])->post('/update-teacher/{id}', [ TeacherController::class, 'update' ])->name('update-teacher');
    Route::middleware(['auth:sanctum', 'verified'])->post('/delete-teacher/{id}', [ TeacherController::class, 'delete' ])->name('delete-teacher');

    //ADMIN MANAGING COURSE - MANAGE COURSE
    Route::middleware(['auth:sanctum', 'verified'])->get('/manage-course', [ AdminCourseController::class, 'manage' ])->name('manage-course');
    Route::middleware(['auth:sanctum', 'verified'])->get('/view-details/{id}', [ AdminCourseController::class, 'detail' ])->name('view-details');
    Route::middleware(['auth:sanctum', 'verified'])->get('/update-status/{id}', [ AdminCourseController::class, 'update' ])->name('update-status');




    //  -------------------------------- FOR TEACHER PANEL---------------------------------------
Route::get('/teacher-dashboard', [TeacherDashboardController::class, 'index'])->name('teacher-dashboard');

//TEACHER CREATING & MANAGING SUBJECTS
Route::get('/add-subject', [SubjectController::class, 'index'])->name('add-subject');
Route::post('/new-subject', [SubjectController::class, 'create'])->name('new-subject');
Route::get('/manage-subject', [SubjectController::class, 'manage'])->name('manage-subject');
Route::get('/edit-subject/{id}', [SubjectController::class, 'edit'])->name('edit-subject');
Route::post('/update-subject/{id}', [SubjectController::class, 'update'])->name('update-subject');
Route::post('/delete-subject/{id}', [SubjectController::class, 'delete'])->name('delete-subject');

// ------------------------------------- FOR PDF -------------------------------------------------------
//Route::get('/generate-pdf', [PdfController::class, 'generatePdf'])->name('generate-pdf');
Route::get('/generate-pdfs', [AdminController::class, 'adminPdf'])->name('generate-pdfs');
Route::get('/admin-pdf', [AdminController::class, 'adminpdfshow'])->name('admin-pdf');
