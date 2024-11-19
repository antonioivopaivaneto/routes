<?php

use App\Controllers\HomeController;

return [
    '/' => [HomeController::class,'index'],
    '/about' => [HomeController::class,'about'],
];

