<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VapoController;

Route::get("/vapo", [VapoController::class, "ListarWeb"]);
