<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('welcome');
});


Route::get('sendqueue/mail',function()
{
    Mail::later(5,'view_email', 'Hisoka data from email queue...', function($message)
        {
            $message->to('hyosoka187@gmail.com','From Maryadi_astronaut')->subject('test email');
        });
});


