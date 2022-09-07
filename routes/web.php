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
// Route::get('/{{category->name}}',[ClothingController::class,'index'])->name('home');;


// Route::get('/Womens formal summer clothes', function () {
//     return view('WFSC', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });
// Route::get('/Womens summer pajamas', function () {
//     return view('WSP', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });
// Route::get('/Womens formal winter clothes', function () {
//     return view('WFWC', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });
// Route::get('/Womens winter pajamas', function () {
//     return view('WWP', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });
// Route::get('/Mens formal summer clothes', function () {
//     return view('MFSC', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });
// Route::get('/Mens summer pajamas', function () {
//     return view('MSP', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });
// Route::get('/Mens formal winter clothes', function () {
//     return view('MFWC', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });
// Route::get('/Mens winter pajamas', function () {
//     return view('MWP', [
//         'images' =>\App\Models\clothing::all()

//     ]);
// });

Route::get('/admin', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store']);


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
// {
//    return view('clothing.category_index', [
//        'images' => $category->clothing,
//        'categories' => Category::all(),
//        'currentCategory' => $category,
//    ]);
// })->name('category');
