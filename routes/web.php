<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdmProdutosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PromocaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Routes the home
Route::get('/', [HomeController::class, 'index']);

// Routes the products
Route::get('/products/{categoria?}', [ProductController::class, 'index']);
Route::get('/products/single/id_produto={id}', [ProductController::class, 'single_product']);
Route::get('/products/cart/id_produto={id}', [ProductController::class, 'cart']);

//Route the Cart
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/store', [CartController::class, 'add']);
Route::delete('/cart/destroy', [CartController::class, 'remove']);

//Routes the policy
Route::get('/policy/privacy_policy', [PolicyController::class, 'privacy']);
Route::get('/policy/refund_policy', [PolicyController::class, 'refund']);
Route::get('/policy/terms_conditions', [PolicyController::class, 'terms']);

//Routes the pages
Route::get('/pages/contact', [PagesController::class, 'contact']);
Route::get('/pages/about', [PagesController::class, 'about']);
Route::get('/pages/traking', [PagesController::class, 'tracking']);
Route::get('/pages/chekout', [PagesController::class, 'chekout']);

//Routes the adm produto
Route::get('/admin/produtos', [AdmProdutosController::class, 'index']);
Route::get('/admin', [AdmProdutosController::class, 'home']);
Route::get('/admin/produtos/form', [AdmProdutosController::class, 'form']);
Route::post('/admin/produtos', [AdmProdutosController::class, 'add']);
Route::delete('/admin/produtos', [AdmProdutosController::class, 'remove']);
Route::get('/adm/contact-adm', [AdmProdutosController::class, 'contactadm']);
//Routes the adm fornecedor
Route::get('/admin/fornecedores', [FornecedorController::class, 'index']);
Route::get('/admin/fornecedores/form', [FornecedorController::class, 'form']);
Route::post('/admin/fornecedores', [FornecedorController::class, 'add']);
Route::delete('/admin/fornecedores', [FornecedorController::class, 'remove']);
//Routes the adm cliente
Route::get('/admin/clientes', [ClienteController::class, 'index']);
Route::delete('/admin/clientes', [ClienteController::class, 'remove']);
//Routes the users
Route::get('/users/sign-in', [ClienteController::class, 'sign_in']);
Route::get('/users/sign-up', [ClienteController::class, 'sign_up']);
Route::post('/users/sign-up', [ClienteController::class, 'add']);

Route::post('/promocoes', [PromocaoController::class, 'add']);
Route::get('/admin/promocoes', [PromocaoController::class, 'index']);
Route::delete('/admin/promocoes', [PromocaoController::class, 'remove']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});
