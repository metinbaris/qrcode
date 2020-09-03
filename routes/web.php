<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['api','ipMiddleware'])->group(function () {
    Route::post('/register-user', 'QrCodeAPI\RegisterUserController@create');
    Route::post('/generate-qrcode', 'QrCodeAPI\QrCodeGeneratorController@generate');
});