<?php


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "hello";
});
Route::get('/api-data', function () {
    $response = Http::get('https://mapi.indiamart.com/wservce/crm/crmListing/v2/?glusr_crm_key=mR21E7Bv433EQPep5X2I7liNp1rBlTFm&start_time=01-Jan-2023&end_time=06-Jan-2023');
   
    $data = json_decode($response->getBody(), true);
  
    return view('api-data')->with('data',$data);
});
