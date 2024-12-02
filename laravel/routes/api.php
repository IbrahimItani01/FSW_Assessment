<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IncrementRequests;
Route::middleware(IncrementRequests::class)->group(function () {

});
