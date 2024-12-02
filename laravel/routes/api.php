<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IncrementRequests;
use App\Http\Controllers\Users;
use App\Http\Controllers\Projects;
use App\Http\Controllers\Members;

Route::middleware(IncrementRequests::class)->group(function () {

    Route::prefix('users')->group(function () {
        
    });

    Route::prefix('projects')->group(function () {
       
    });
});
