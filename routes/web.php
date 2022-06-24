<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MealController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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


// --------------------------------------------------------- 前端頁面 ------------------------------------------------------------------------------

Route::prefix('/')->group(function () {
    Route::get('/', [Controller::class, 'index']);                              // 主頁
    Route::get('/drink_list', [Controller::class, 'drink_list']);               // 飲品介紹
    Route::get('/mealsindex_original', [Controller::class, 'mealsindex']);      // 餐點介紹
    Route::get('/position_map', [Controller::class, 'position_map']);           // 門市據點
    Route::get('/right_of_customer', [Controller::class, 'right_of_customer']); // 顧客權益
    Route::get('/story', [Controller::class, 'story']);                         // 品牌故事
    Route::get('/feedback', [Controller::class, 'feedback']);                   // 顧客留言
    Route::post('/store_feedback', [Controller::class, 'store_feedback']);      // 顧客留言新增
});

// --------------------------------------------------------- 後端頁面 ------------------------------------------------------------------------------
// 進入後台請先到 welcome 創建帳號並登入

// welcome
Route::get('/welcome', function () {
    return view('welcome');
});

// 後端登入後主頁
Route::get('/dashboard',[Controller::class, 'dashboard'] )->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// 餐點管理
Route::prefix('/meal')->middleware(['auth'])->group(function () {
    Route::get('/', [MealController::class, 'index']);
    Route::get('/create', [MealController::class, 'create']);
    Route::post('/store', [MealController::class, 'store']);
    Route::get('/edit/{id}', [MealController::class, 'edit']); // 編輯改成彈出視窗做修改，所以不用編輯頁面
    Route::post('/{id}', [MealController::class, 'update']); // 更新按鈕在列表頁
    Route::delete('/delete/{id}', [MealController::class, 'delete']);
});
    Route::post('/upload/meal_img/{id}', [UploadController::class, 'meal_img_update'])->middleware(['auth']); // Upload 餐點圖片用
    Route::post('/store/meal/tag', [MealController::class, 'store_tag'])->middleware(['auth']); // 新增餐點類別
    Route::delete('/delete_meal_tag/{id}', [MealController::class, 'delete_tag'])->middleware(['auth']); // 刪除餐點類別


// 顧客留言管理類別
Route::prefix('/backend/feedback')->middleware(['auth'])->group(function () {
    Route::get('/', [FeedbackController::class, 'index']);
    Route::post('/{id}', [FeedbackController::class, 'update']); // 更新按鈕在列表頁
    Route::delete('/delete/{id}', [FeedbackController::class, 'delete']);
});

// 消息管理
Route::prefix('/new')->middleware(['auth'])->group(function () {
    Route::get('/', [NewController::class, 'index']);
    Route::get('/create', [NewController::class, 'create']);
    Route::post('/store', [NewController::class, 'store']);
    Route::get('/edit/{id}', [NewController::class, 'edit']);
    Route::post('/{id}', [NewController::class, 'update']);
    Route::delete('/delete/{id}', [NewController::class, 'delete']);
});
    Route::post('/upload/new_img/{id}', [UploadController::class, 'new_img_update'])->middleware(['auth']); // Upload 消息圖片用

    // 刪除歷史紀錄
    Route::delete('/delete_history/{id}', [Controller::class, 'delete_history'])->middleware(['auth']);

// 帳號管理
Route::prefix('/account')->middleware(['auth','power'])->group(function () {
    Route::get('/', [AccountController::class, 'index']);
    Route::get('/create', [AccountController::class, 'create']);
    Route::post('/store', [AccountController::class, 'store']);
    Route::post('/{id}', [AccountController::class, 'update']);
    Route::delete('/delete/{id}', [AccountController::class, 'delete']);
});
    // 個人帳號編輯頁面
    Route::get('/personal_edit/{id}', [AccountController::class, 'personal_edit'])->middleware(['auth']);
    // 個人帳號設定
    Route::post('/personal_update/{id}', [AccountController::class, 'personal_update'])->middleware(['auth']);





