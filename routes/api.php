<?php
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// //route test
// Route::resource('products', ProductController::class);


//view all product
Route::get('/products', [ProductController::class,'index']);

//create a product
Route::post('/products', [ProductController::class,'store']);

//update ang product
Route::put('/products/{id}', [ProductController::class,'update']);
