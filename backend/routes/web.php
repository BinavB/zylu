<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Zylu Employee API',
        'version' => '1.0.0',
        'endpoints' => [
            'employees' => '/api/employees'
        ]
    ]);
});
