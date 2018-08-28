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

use App\Apartment;
use App\Picture;
use App\Price;
use App\Referral;
use App\Http\Controllers;
use Illuminate\Http\Request;

use App\Mail\Test;

Route::resource('apartn', 'ApartmentController');
Route::resource('prices', 'PricesController');

Route::get('/email1', function() {
    \Mail::to('mattsmithsc@gmail.com')->send(new Test);

    return view('etest');
});

// Contact form submissions
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@mailToAdmin');
Route::post('/', 'ContactController@mailAvailable');

/*Main Page Loads*/
Route::get('/', function () {
		$units = DB::table('apartments')->orderby('date_avail')->get();

		return view('index', compact('units', 'layouts'));
	
	});

Route::get('/admin', function() {
    $apartment= Apartment::all();
    $aptcnt= $apartment->count();
    $prices = Price::All();
    $referral = Referral::All();
    $refcnt = $referral->count();

    return view('admin', compact('apartment','aptcnt','prices','refcnt'));
})->middleware('auth');

Route::get('/logout', function() {

    Auth::logout();
    
    $units = Apartment::All();

    return view('index', compact('units'));
});

Route::get('/reviews', function () {

	$referrals = DB::table('referrals2')->inRandomOrder()->limit(8)->get();

    return view('reviews', compact('referrals'));
});

Route::get('/referrals', function () {

    $referrals = DB::table('referrals2')->get();

    return view('referrals', compact('referrals'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/directions', function () {
    return view('directions');
});

Route::get('/print_dir', function () {
    return view('print_dir');
});

Route::get('/features', function () {
    return view('amenities');
});

Route::get('/floorplan', function () {
    return view('floorplan');
});

Route::get('/apartments', function () {
    $pictures = DB::table('pictures')->get();
    return view('apartments', compact('pictures'));
});

Route::get('/aptinfo', function () {
    $prices = Price::All();
    return view('aptinfo', compact('prices'));
    /*return view('aptinfo');*/
});


Route::get('/rental', function () {
    return view('rental');
});

/*Route::get('/contact', function () {
    return view('contact');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/units', function () {
    return view('/admin.units2');
});

// ZenConscience.com material
Route::get('/koan', function () {
    return view('koan.source2');
});

Route::get('/koan1', function () {
    return view('koan.source1');
});

Route::get('/koan2', function () {
    return view('koan.source3');
});

