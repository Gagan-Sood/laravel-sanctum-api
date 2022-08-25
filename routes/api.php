<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

# For crud operations on product table
// Route::resource('products', ProductController::class);

# Public routes
// Route::get('/products', [ProductController::class, 'index']);
// Alternate and best way
Route::controller(ProductController::class)->group(function() {
    Route::get('/products/{id?}', 'index');
    Route::get('/products/{id}', 'show');
    Route::get('/products/search/{name}', 'search');
});
Route::controller(AuthController::class)->group(function() {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

# Default route for middleware sanctum
/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


# Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::controller(ProductController::class)->group(function() {
        Route::post('/products', 'store');
        Route::put('/products/{id}', 'update');
        Route::delete('/products/{id}', 'destroy');
        Route::post('/storeImage', 'storeImage');
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});