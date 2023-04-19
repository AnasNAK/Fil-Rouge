<?php
use App\Http\Controllers\MethodsController;
use App\Models\Method;
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

Route::resource('Method',MethodsController::class);

// Route::get('/methods',[MethodsController::class,'index']);

// Route::post('/methods',[MethodsController::class,'store'] );
// Route::get('/methods', function () {
   
    
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
