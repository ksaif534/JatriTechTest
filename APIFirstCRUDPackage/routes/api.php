<?php

use Saifkamal\ApiFirstCrudPackage\Http\Controllers\CRUDResourceController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->prefix('api')->group(function(){
    Route::resource('crud_resources',CRUDResourceController::class);
});