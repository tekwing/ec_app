<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\UiController;
use App\Http\Controllers\SuperAdmin\LetterheadController;
use App\Http\Controllers\SuperAdmin\FormsAndDocumentsController;

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

Route::get('/dashboard', [UiController::class, 'dashboard'])->name('dashboard');
Route::get('/ec_profile', [UiController::class, 'ec_profile'])->name('ec_profile');
Route::get('/ec_member_list', [UiController::class, 'ec_member_list'])->name('ec_member_list');
Route::get('/ec_roles_permission', [UiController::class, 'ec_roles_permission'])->name('ec_roles_permission');
Route::get('/ec_user_roles', [UiController::class, 'ec_user_roles'])->name('ec_user_roles');
Route::get('/ec_logo', [UiController::class, 'ec_logo'])->name('ec_logo');
Route::get('/ec_login_method', [UiController::class, 'ec_login_method'])->name('ec_login_method');
Route::get('/letterhead', [UiController::class, 'letterhead'])->name('letterhead');
Route::get('/ec_reference', [UiController::class, 'ec_reference'])->name('ec_reference');
Route::get('/ec_meeting', [UiController::class, 'ec_meeting'])->name('ec_meeting');
Route::get('/ec_timeline', [UiController::class, 'ec_timeline'])->name('ec_timeline');
Route::get('/invoice', [UiController::class, 'invoice'])->name('invoice');
Route::get('/qr_code', [UiController::class, 'qr_code'])->name('qr_code');
Route::get('/bank_account_details', [UiController::class, 'bank_account_details'])->name('bank_account_details');
Route::get('/add_form_document', [UiController::class, 'add_form_document'])->name('add_form_document');
Route::get('/study_registration_form', [UiController::class, 'study_registration_form'])->name('study_registration_form');
Route::get('/submissions', [UiController::class, 'submissions'])->name('submissions');
Route::get('/faq', [UiController::class, 'faq'])->name('faq');
Route::get('/initial_form', [UiController::class, 'initial_form'])->name('initial_form');
Route::get('/initial_review_form', [UiController::class, 'initial_review_form'])->name('initial_review_form');

Route::post('/save-html', [FormsAndDocumentsController::class, 'saveHtmlCard'])->name('saveHtmlCard');

Route::get('/', [UiController::class, 'index'])->name('signin');


Route::get('/logout', function () {
    return view('SuperAdmin/logout');
})->name('logout');
