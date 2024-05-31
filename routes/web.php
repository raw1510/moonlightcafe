<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;

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

/* backend routing all start*/

Route::get('/admin/menu_category',[AdminController::class,'get_menuCategory_data'])->name('admin.menuCategory.display');

Route::get('/admin/menu_category/add_form', function () {
    return view('admin_panel.menu_category.menu_category_addForm');
})->name('admin.menuCategory.addform');

Route::post('/admin/menu_category/add_form/post',[AdminController::class,'menuCategory_addForm_post'])->name('admin.menuCategory.addform.post');

Route::get('/admin/menu_category_sub_items/{id}',[AdminController::class,'menuCategory_sub_display_items'])->name('menu.category.sub.items.display');

Route::get('/admin/menu_category_sub_items/{id}/add_form',[AdminController::class,'menuCategory_sub_items_form_get'])->name('menu.category.sub.items.form.get');


Route::post('/menu_category_sub_items/add_form/post',[AdminController::class,'menuCategory_sub_items_form_post'])->name('menu.category.sub.items.form.post');


Route::get('/admin/tableAdd', function () {
    return view('admin_panel.menu_category');
});

/* backend routing all end */


/* frontend routing all start */


Route::get('/admin/table_list', [QrCodeController::class, 'tableListView'])->name('admin.food.table.list');
Route::get('/admin/table_list/form_get', [QrCodeController::class, 'create_new_table_form_get'])->name('admin.food.table.form.get');

Route::post('/admin/table_list/form_post', [QrCodeController::class, 'create_new_table_form_post'])->name('admin.food.table.form.post');



/* frontend routing all end */

