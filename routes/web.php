<?php
use App\Http\Controllers\ClothingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use \App\Models\clothing;
use \App\Models\category;

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

Route::get('/',[ClothingController::class,'index'])->name('home');




Route::get('/admin', [ClothingController::class, 'create'])->middleware('permissions');
Route::post('/admin', [ClothingController::class, 'store'])->middleware('permissions');


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/Logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');



// Route::get('/admin', [AdminController::class,'create'])->middleware('permissions');

Route::get('/{category:name}', function(category $category){
    return view('WFSC',[
'images'=>$category->clothing,
'categores'=>$category
    ]);
});
Route::get('/images/{image:id}', function (clothing $image) {
    return view('prodact', [
        'ima' => $image

    ]);
});
