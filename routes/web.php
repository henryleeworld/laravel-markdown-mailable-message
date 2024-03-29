<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/mail', [MailController::class, 'sendMail']);
