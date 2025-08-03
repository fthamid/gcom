<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\FactureController;
use App\Livewire\ClientList;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowPosts;
use App\Livewire\Post\Show;
use App\Livewire\TodoList;
use App\Livewire\CrTest;
use App\Livewire\HelloWorld;
use App\Livewire\SayHi;
Route::get('/', function () { return view('pages.home',['name' => 'Les comptoirs Unimatel']);});
Route::get('/contact', function () { return view('pages.contact'); });
Route::resource('clients', ClientController::class);
Route::get('/clientsList', function () { return view('start');});
Route::resource('produits', ProduitController::class);
Route::resource('factures', FactureController::class);

Route::get('/welcome', function () { return view('welcome');});
Route::match(['get', 'post'],'/test', function () { return view('start');});
Route::post('/test', function () { return view('start');});
Route::get('/hello/{name?}', HelloWorld::class);
Route::get('/post', ShowPosts::class);
Route::get('/show', Show::class);
Route::get('/todo', TodoList::class);
Route::get('/cr-test', CrTest::class);
Route::get('/say-hi/{name?}', SayHi::class);
#----------------  Tests ---------------------------------
Route::get('/a-propos', function() {  return 'A propos'; });
//Route::get('/bonjour', function() {  return 'Bonjour '. $_GET['prenom']; });
Route::get('/bonjour', function() {  return 'Bonjour '. request('prenom'); });
Route::get('/bonjour/{prenom}', function() {  return 'Bonjour '. request('prenom'); });