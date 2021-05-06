<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
/**
 * Social Login Routes
 */
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback','SocialController@Callback');


Route::get('/test', 'TestController@index')->name('test');
Route::get('/test1', 'TestController@test2')->name('test');



Route::redirect('/', '/login');
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
})->name('home');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', '2fa']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::post('categories/media', 'CategoriesController@storeMedia')->name('categories.storeMedia');
    Route::post('categories/ckmedia', 'CategoriesController@storeCKEditorImages')->name('categories.storeCKEditorImages');
    Route::post('categories/parse-csv-import', 'CategoriesController@parseCsvImport')->name('categories.parseCsvImport');
    Route::post('categories/process-csv-import', 'CategoriesController@processCsvImport')->name('categories.processCsvImport');
    Route::resource('categories', 'CategoriesController');

    // Resources
    Route::delete('resources/destroy', 'ResourcesController@massDestroy')->name('resources.massDestroy');
    Route::resource('resources', 'ResourcesController');

    // City
    Route::delete('cities/destroy', 'CityController@massDestroy')->name('cities.massDestroy');
    Route::post('cities/parse-csv-import', 'CityController@parseCsvImport')->name('cities.parseCsvImport');
    Route::post('cities/process-csv-import', 'CityController@processCsvImport')->name('cities.processCsvImport');
    Route::resource('cities', 'CityController');

    // State
    Route::delete('states/destroy', 'StateController@massDestroy')->name('states.massDestroy');
    Route::post('states/parse-csv-import', 'StateController@parseCsvImport')->name('states.parseCsvImport');
    Route::post('states/process-csv-import', 'StateController@processCsvImport')->name('states.processCsvImport');
    Route::resource('states', 'StateController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::post('countries/parse-csv-import', 'CountriesController@parseCsvImport')->name('countries.parseCsvImport');
    Route::post('countries/process-csv-import', 'CountriesController@processCsvImport')->name('countries.processCsvImport');
    Route::resource('countries', 'CountriesController');

    // New Req
    Route::delete('new-reqs/destroy', 'NewReqController@massDestroy')->name('new-reqs.massDestroy');
    Route::resource('new-reqs', 'NewReqController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
        Route::post('profile/two-factor', 'ChangePasswordController@toggleTwoFactor')->name('password.toggleTwoFactor');
    }
});
Route::group(['namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Two Factor Authentication
    if (file_exists(app_path('Http/Controllers/Auth/TwoFactorController.php'))) {
        Route::get('two-factor', 'TwoFactorController@show')->name('twoFactor.show');
        Route::post('two-factor', 'TwoFactorController@check')->name('twoFactor.check');
        Route::get('two-factor/resend', 'TwoFactorController@resend')->name('twoFactor.resend');
    }
});
