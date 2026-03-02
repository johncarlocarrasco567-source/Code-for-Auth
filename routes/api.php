<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);

    //for testing only. to test it out go to this http://127.0.0.1:8000/api/test
    // if its not working thats becuase you need a token. so get this whole code out of this parameter and test it again.
    // to get the token you must register and then login the credintials you register(email,password)
    //the parameter for registration is name, email, password, and for login is email, password
    // watch the whole video that sir niel sent, to know where to get and put the token on postman
    Route::get('/test', function () {
    return response()->json([
        'message' => 'test'
    ]);
});

    
});


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
