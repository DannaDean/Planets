<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

// General routes

Route::get('/', [PlanetController::class, "index"]);
Route::get("/create", function () {
    return view("cms.create");
});
Route::get('/about', function () {
    return view("/pages/about");
});

// Each planet pages id
Route::get("/planet/{id}", [PlanetController::class, "findId"]);


// Craete route
Route::post("/create", [PlanetController::class, "create"]);

// Each planet update page
Route::get("/update{id}/", [PlanetController::class, "updateId"]);

Route::put("/update/{id}", [PlanetController::class, "updateInfo"]);

