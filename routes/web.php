<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('adminlte', function () {
    return view('admin/adminlte');
});
Route::get('panel', function () {
    return view('_design/panel');
});
//Route::get('dashboard/v1', function () {
//    return view('dashboard/panel');
//});

Route::get('/', 'DashboardController@index');
Route::get('dashboard/v1', 'DashboardController@v1');
Route::get('dashboard/v2', 'DashboardController@v2');
Route::get('dashboard/v3', 'DashboardController@v3');

Route::get('widgets', 'WidgetsController@index');

Route::get('charts', 'ChartsController@index');
Route::get('charts/chartjs', 'ChartsController@chartjs');
Route::get('charts/flot', 'ChartsController@flot');

Route::get('uielements', 'UIElementsController@index');
Route::get('uielements/general', 'UIElementsController@general');
Route::get('uielements/icons', 'UIElementsController@icons');
Route::get('uielements/buttons', 'UIElementsController@buttons');
Route::get('uielements/sliders', 'UIElementsController@sliders');
Route::get('uielements/modals', 'UIElementsController@modals');
Route::get('uielements/navbar', 'UIElementsController@navbar');
Route::get('uielements/timeline', 'UIElementsController@timeline');
Route::get('uielements/ribbons', 'UIElementsController@ribbons');

Route::get('forms/general', 'FormsController@general');
Route::get('forms/advanced', 'FormsController@advanced');
Route::get('forms/editors', 'FormsController@editors');
Route::get('forms/validation', 'FormsController@validation');

Route::get('tables/simple', 'TablesController@simple');
Route::get('tables/datatables', 'TablesController@datatables');
Route::get('tables/jsgrid', 'TablesController@jsgrid');

Route::get('calendar', 'CalendarController@index');

Route::get('gallery', 'GalleryController@index');

Route::get('mailbox', 'MailboxController@index');
Route::get('mailbox/inbox', 'MailboxController@inbox');
Route::get('mailbox/compose', 'MailboxController@compose');
Route::get('mailbox/read', 'MailboxController@read');

Route::get('pages', 'PagesController@index');
Route::get('pages/invoice', 'PagesController@invoice');
Route::get('pages/invoice_print', 'PagesController@invoice_print');
Route::get('pages/profile', 'PagesController@profile');
Route::get('pages/e_commerce', 'PagesController@e_commerce');
Route::get('pages/projects', 'PagesController@projects');
Route::get('pages/project_add', 'PagesController@project_add');
Route::get('pages/project_edit', 'PagesController@project_edit');
Route::get('pages/project_detail', 'PagesController@project_detail');
Route::get('pages/contacts', 'PagesController@contacts');

Route::get('extras', 'ExtrasController@index');
Route::get('extras/login', 'ExtrasController@login');
Route::get('extras/register', 'ExtrasController@register');
Route::get('extras/forgot_password', 'ExtrasController@forgot_password');
Route::get('extras/recover_password', 'ExtrasController@recover_password');
Route::get('extras/lockscreen', 'ExtrasController@lockscreen');
Route::get('extras/legacy_user_menu', 'ExtrasController@legacy_user_menu');
Route::get('extras/language_menu', 'ExtrasController@language_menu');
Route::get('extras/error_404', 'ExtrasController@error_404');
Route::get('extras/error_500', 'ExtrasController@error_500');
Route::get('extras/pace', 'ExtrasController@pace');
Route::get('extras/blank', 'ExtrasController@blank');

Route::get('admin_template', function () {
    return view('admin_template');
});
Route::get('adminlte', function () {
    return view('adminlte');
});