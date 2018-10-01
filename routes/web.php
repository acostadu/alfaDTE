<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/message', 'HomeController@store')->name('message.store');

// Generar PDF
Route::get('/pdf','PDFController@generatePDF');

// Envio de Email 
Route::get('/mail/send', 'MailController@send');
