<?php

Route::get('/', function () {
    return view('auth/login');
});


Route::post('userregistration', 'Auth\RegisterController@register')->name('userregistration');

Auth::routes();



// HOME CONTROLLER

// MANAGEMENT MENU

Route::get('/management_menu' ,'HomeController@managementPage')->name('management_menu');

Route::get('awaitingconfirmation', 'HomeController@awaiting')->name('awaitingconfirmation');

Route::get('home', 'HomeController@index')->name('home');

Route::get('rules', 'HomeController@rules')->name('rules');

Route::post('/pollregistration', 'HomeController@pollregistration')->name('pollregistration');

Route::get('/admin', 'HomeController@indexAdmin')->name('admin');



// ADMINS CONTROLLER

Route::get('/program', 'AdminsController@programManagement')->name('program');

Route::get('/assign', 'AdminsController@assignRep')->name('assign');

Route::post('/assigntouser', 'AdminsController@assignToUser');

Route::get('/addrep', 'AdminsController@addRep')->name('addRep');

Route::post('/storerep', 'AdminsController@storeRep')->name('storerep');

Route::delete('users/{id}', [
    'as' => 'delete_user', 
    'uses' => 'AdminsController@deleteUser'
]);

Route::post('editstatus', 'AdminsController@editStatus')->name('editstatus');

Route::Resource('admins', 'AdminsController');

// PROJECTS

Route::Resource('project', 'ProjectsController');


// MITIGACION

Route::Resource('mitigation', 'MitigationController');

// PREVENCION

Route::Resource('prevention', 'PreventionController');


// RISKS

Route::Resource('risk', 'RisksController');

// EMPLOYEES CONTROLLER

Route::Resource('employee','EmployeesController');

// CATEGORIES CONTROLLER

Route::Resource('category', 'CategoriesController');

// GROUPS CONTROLLEr

Route::Resource('group', 'GroupsController');


// COUNTRIES CONTROLLER

Route::Resource('country', 'CountriesController');

//STAGES CONTROLLER

Route::Resource('stage', 'StagesController');







