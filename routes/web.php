<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\HomeController;
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


// Tu dong tro den thu muc views
//Route::get('/form', function () {
//    return view('form');
//});

//Route::post('/unicode',function (){
//    return "Route::post unicode";
//});

//Route::any('/unicode',function (Request $request){
//    return $request->method();
//});

//Route::get('/unicode', function () {
//    return view('form');
//});

//Route::redirect('unicode', 'https://google.com', 301);

//Route::get('/', function (){
//   return view('home');
//})->name('home');
//
//Route::prefix("admin")->group(function (){
//    // truyen tham so tren url
//    Route::get("unicode/{id?}-{name?}", function ($id=null, $name=null){
//        $content = "phuong thuc get path admin/unicode voi tham so ";
//        $content.= 'id '.$id.' voi name : '.$name;
//        return $content ;
//    })->where(
//        [
//            'id'=>'[0-9-]+',
//            'name'=>'[a-z]+'
//        ]
//    )->name('admin.tintuc');
//
//    Route::get('form/{param?}', function ($param=null){
//       return "phuong thuc get path admin/form: " . $param;
//    });
//
//    Route::get('form', function (){
//        return "phuong thuc get path admin/form";
//    })->name('admin.form');
//
//    //add one more prefix
//    Route::prefix('product')->middleware('checkpermission')->group(function (){
//        Route::get('edit',function (){
//            return "sua san pham";
//        });
//        Route::get('delete',function (){
//            return "xoa san pham";
//        });
//        Route::get('add',function (){
//            return "them san pham";
//        });
//
//    });
//});

// Client route
Route::get('/',[HomeController::class, 'index'])->name('homepage');

Route::prefix('categories')->group(function (){

    //Danh sach chuyen muc
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    //Lay chi tiet 1 chuyen muc(ap dung show form sua chuyen muc)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    // update chuyen muc
    Route::post('edit/{id}',[CategoriesController::class, 'updateCategory']);

    // hien thi form add du lieu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    //xu ly them chuyen muc
    Route::post('/add', [CategoriesController::class, 'handleCategory']);

    //Xoa chuyen muc
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');

    // Bài HTTP REQUEST
    // hiển thị form upload
    Route::get('/file', [CategoriesController::class, 'getFile'])->name('categories.file');
    // hien thi form add du lieu
    Route::post('/file', [CategoriesController::class, 'handleFile'])->name('categories.handlefile');
});

// Bài View
Route::get('san-pham/{id}',[HomeController::class, 'getProductById']);

// Bài Blade 2
Route::get('/blade', [BladeController::class, 'printNumber']);

// Bài Blade 3
// Master layout
Route::prefix('/blade3')->group(function(){
    Route::get('/master-layout', [BladeController::class, 'handleMasterLayout']);
});

// Bai Validation
Route::get('/validate', [HomeController::class, 'getvalidateForm']);
Route::post('/validate', [HomeController::class, 'validateForm']);
















Route::get('/chay-duoc-roi-nhe', function(){
    return '<h2 style="color: red">Chaỵ được rồi Bảo Ân nhé</h2>';
});



//Admin route
Route::middleware('auth.admin')-> prefix('admin')->group(function (){
    Route::get('/',[DashboardController::class,'index']);
    //Route::middleware('auth.admin.product')->resource('products', ProductsController::class);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});





