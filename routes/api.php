<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post("/login", [AuthController::class, "login"]);

Route::group(["middleware" => ["auth:api"]], function () {
    Route::get("/getCustomer", [CustomerController::class, "getCustomer"]);
    Route::get("/remember", [AuthController::class, "getRemember"]);
    Route::post("/logout", [AuthController::class, "logout"]);
});
