<?php

use Illuminate\Support\Facades\Route;
use Lobeliatechnology\Inspire\Controllers\InspirationController;

Route::get('inspire', [InspirationController::class,'index']);