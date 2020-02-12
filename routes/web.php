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

Route::get('/', function () {
    return view('home');
}) -> name('homepage');

// a questa view passo 2 parametri, sono 2 array che contengono le faq,
// si trovano nel file elenco_faqs.php nella cartella 'config'.
// (in realtà passo solo 1 parametro ($data), un array costituito da 2 elementi
// che sono anche loro 2 array)
Route::get('/faq', function () {
    $data = ['lista_faq_sx' => config('elenco_faqs.faqs_sx'),
           'lista_faq_dx' => config('elenco_faqs.faqs_dx')];
    return view('faq', $data);
}) -> name('faq');

Route::get('/privacy-policy', function () {
    return view('privacy');
}) -> name('privacy');
