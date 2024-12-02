<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IncrementRequests;
use App\Http\Controllers\Users;
use App\Http\Controllers\Projects;
use App\Http\Controllers\Members;

Route::middleware(IncrementRequests::class)->group(function () {

    Route::prefix('users')->group(function () {
        Route::get('/', [Users::class, 'getAll']); 
        Route::get('/{id}', [Users::class, 'getData']);
        Route::post('/', [Users::class, 'create']); 
        Route::put('/', [Users::class, 'update']); 
        Route::delete('/{id}', [Users::class, 'delete']); 
    });

    Route::prefix('projects')->group(function () {
        Route::get('/', [Projects::class, 'getAll']); 
        Route::get('/{id}', [Projects::class, 'getData']); 
        Route::post('/', [Projects::class, 'create']); 
        Route::put('/', [Projects::class, 'update']); 
        Route::delete('/{id}', [Projects::class, 'delete']); 
    });
    });
});
