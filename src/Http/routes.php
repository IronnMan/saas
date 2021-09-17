<?php

use IronnMan\Saas\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('saas', Controllers\SaasController::class.'@index');