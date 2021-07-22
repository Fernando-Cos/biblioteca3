<?php
// use App\Http\Controllers\Front\IndexController;
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

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function() {
    //Todas as rotas admin do projeto..
    Route::match(['get','post'], '/' ,'AdminController@login');
    
    Route::group(['middleware'=>['admin']],function(){

        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('logout', 'AdminController@logout');
        Route::get('settings', 'AdminController@settings');
        Route::post('check-current-pwd', 'AdminController@chkCurrentPassword');
        Route::post('update-current-pwd', 'AdminController@updateCurrentPassword');
        Route::match(['get', 'post'], 'update-admin-details','AdminController@updateAdminDetails');

        // sections
        Route::get('sections', 'SectionController@sections');
        Route::post('update-section-status', 'SectionController@updateSectionStatus');

        // Categorias
        Route::get('categories','CategoryController@categories');
        Route::post('update-category-status', 'CategoryController@updateCategoryStatus');
        Route::match(['get', 'post'],'add-edit-category/{id?}','CategoryController@addEditCategory'); 
        Route::post('append-categories-level','CategoryController@appendCategoryLevel');
    });
});

Route::namespace('Front')->group(function () {
    Route::get('/', 'IndexController@index');
    Route::get('memorial', 'IndexController@memorial');
    Route::get('publicacao', 'IndexController@publicacao');
    Route::get('ebooks', 'IndexController@ebooks');
    // Route::get('descricao', 'IndexController@descricao');
    Route::get('repositorio', 'IndexController@repositorioInstitucional');
    Route::get('contatos', 'IndexController@contatos');
    Route::get('historia', 'IndexController@historia');
    Route::get('ficha', 'IndexController@fichaCatalogacao');
    Route::get('isbn', 'IndexController@isbn');
    Route::get('emprestimo', 'IndexController@emprestimoObras');
    Route::get('agendamento', 'IndexController@agendamentoSala');
    Route::get('fonte-informacao', 'IndexController@fonteInformacao');
    Route::get('apoio-pesquisa', 'IndexController@apoioPesquisa');
    Route::get('sala-estudo','IndexController@salaEstudo');
    Route::get('saude-literaria', 'IndexController@saudeLiteraria');
    Route::get('bvs', 'IndexController@bvs');
});



Route::namespace('Front')->group(function () {
    Route::get('product/treinamento', 'ProductController@treinamento');
    Route::get('product/boletim', 'ProductController@boletimInformativo');

});


Route::namespace('Repositorio')->group(function () {
    Route::get('repositorio-institucional', 'RepositorioController@indexRepositorio');
    
});



Route::namespace('Ebook')->group(function () {
    Route::get('ebooks/descricao', 'EbookController@descricao');
});
