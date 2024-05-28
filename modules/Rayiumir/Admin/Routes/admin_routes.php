<?php

use Illuminate\Support\Facades\Route;
use modules\Rayiumir\Admin\Http\Controllers\AdminController;

Route::group([], function ($router){
    $router->resource('/admin', AdminController::class)->except('show');
});
