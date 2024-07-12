<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */ 

/* Route::get('/empresa', function () {
    return view('/site/empresa');
}); */

/* Route::any('/any', function () {
    return 'Permite todo tipo de acesso (get, post, put, delete)';
});

Route::match(['get', 'delete'], '/match', function() {
    return 'Permite apenas acessos definidos';
});

// Passando parâmetros na url. O primeiro é obrigatório. O segundo opcional
Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return 'O id do produto é: ' . $id . '<br>' . 'A categoria é: ' . $cat;
}); */

// Redirecionamento
//Route::redirect('/sobre', '/empresa');

// Ou
/* Route::get('/sobre', function(){
    return redirect('/empresa');
}); */

// Renderizando view de maneira mais simples
//Route::view('/empresa', '/site/empresa');

// Rotas nomeadas
/* Route::get('/news', function(){
    return view('news');
})->name('noticiais');
 */
// Redirecionando para rota nomeada
/* Route::get('/novidades', function(){
    return redirect()->route('noticiais');
}); */



// GRUPOS DE ROTAS

// Agrupando pelo prefixo
/* Route::prefix('admin')->group(function(){
    Route::get('dashboard', function(){
        return 'Dashboard';
    });
    Route::get('users', function(){
        return 'Users';
    });
    Route::get('clientes', function(){
        return 'Clientes';
    });
}); */

// Agrupando pelo name

/* Route::get('/', function () {
    return redirect()->route('admin.clientes');
}); */

/* Route::name('admin.')->group(function(){
    Route::get('admin/dashboard', function(){
        return 'Dashboard';
    })->name('dashboard');
    Route::get('admin/users', function(){
        return 'Users';
    })->name('users');
    Route::get('admin/clientes', function(){
        return 'Clientes';
    })->name('clientes');
});  */

// agrupando por prefix e name
/* Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::get('admin/dashboard', function(){
        return 'Dashboard';
    })->name('dashboard');
    Route::get('admin/users', function(){
        return 'Users';
    })->name('users');
    Route::get('admin/clientes', function(){
        return 'Clientes';
    })->name('clientes');
}); */



// ---------------------------------------------------------------

// TRABALHANDO COM CONTROLLERS

/* Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
// para criar controller: php artisan make:controller NomeController
Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show'); */

// Trabalhando com controller resource
Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
