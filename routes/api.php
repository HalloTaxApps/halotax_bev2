<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\PraloginController;
use App\Http\Controllers\TermsPolicyController;
use App\Models\TermsPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [AdminController::class, 'register']);
Route::post('login', [AdminController::class, 'login']);

Route::apiResource('/beritas', BeritaController::class);
Route::apiResource('/iklans', IklanController::class);
Route::apiResource('/edukasis', EdukasiController::class);
Route::apiResource('/pralogins', PraloginController::class);
Route::apiResource('/terms_policies', TermsPolicyController::class);