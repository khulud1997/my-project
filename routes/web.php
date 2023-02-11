  

  <?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\iiphoneapp;
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

 Route::get('/getwelcome',[iiphoneapp::class,"Getwelcome"]);
Route::get('/GetPhone',[iiphoneapp::class,"GetphoneData"])->name("getlist");

Route::get('/checkout/{id}',[iiphoneapp::class,"GetphoneDataid"])->name("getlistid");

Route::POST('/Getinvoic',[iiphoneapp::class,"Getinvoic"])->name("Getinvoic");




Route::get('/getinv', function () {

    return view('invoic');

})->name('invoic');



Route::get('/', function () {




$phone=[

['Type'=>'iphone 14','price'=>4500,'color'=>'pink'],

['Type'=>'Samsong ','price'=>3500,'color'=>'black'],

['Type'=>'Huawei','price'=>2000,'color'=>'gold']




];


    return view("welcome",["phone"=>$phone]);
    
})->name('welcome');


Route::get('/twiq', function () {

    return view('twiq');

    return view('twiq');

}) ->name("twiq");

Route::get('/sa', function () {

    return view('saudi');

});
Route::get('/khulud', function () {

    return view('khulud.khulud');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');