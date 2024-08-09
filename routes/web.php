<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Fadli Hidayatullah',
        'techstacks' => [
            'Laravel',
            'Vue',
            'Inertia',
        ],
    ]);
});

Route::get('/contents', function () {
    return Inertia::render('Contents');
});

Route::get('/projects', function () {
    return Inertia::render('Projects');
});

Route::get('/now', function () {
    return Inertia::render('Now');
});
