<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { // questo è quello che appare nella barra indirizzi (è lo 'slug')
    return view('home'); // questo deve coincidere con il nome del file .blade.php
}) -> name('homepage'); // questo è il nome della rotta che uso all'interno del codice per richiamare la view

Route::get('/lezione_gratis', function () {
    return view('lesson');
}) -> name('lezione');

Route::get('/corso', function () {
    return view('course');
}) -> name('corso');

Route::get('/dopo_il_corso', function () {
    return view('after_the_end');
}) -> name('dopo_corso');

Route::get('/candidati', function () {
    return view('subscribe');
}) -> name('candidati');

// a questa view passo 2 parametri, sono 2 array che contengono le faq,
// si trovano nel file elenco_faqs.php nella cartella 'config'.
// (in realtà passo solo un'unica struttura dati ($data), un array costituito da 2 elementi
// che sono anche loro 2 array)
Route::get('/faq', function () {
    $data = ['lista_faq_sx' => config('elenco_faqs.faqs_sx'),
             'lista_faq_dx' => config('elenco_faqs.faqs_dx')];
    return view('faq', $data);
}) -> name('faq');

Route::get('/privacy-policy', function () {
    return view('privacy');
}) -> name('privacy');
