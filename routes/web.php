<?php

use App\Models\Freelancer;
use App\Models\State;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/', function () {
    $state = State::all();
    $freelance = Freelancer::all();
    $proprety = DB::table('propreties')
    ->join('promotions', 'promotions.proprety', '=', 'propreties.id')
    ->join('clients', 'propreties.client', '=', 'clients.id')
    ->select('propreties.photo as img','propreties.id as idd','propreties.adr as ads','propreties.state as sta','propreties.created_at as date','propreties.*','promotions.*','clients.*')
    ->where('promotions.expire',">=",date('Y-m-d'))
    ->where('approve','Approuvé')->get();
    $image =  DB::table('propreties')
    ->join('promotions', 'promotions.proprety', '=', 'propreties.id')
    ->join('images', 'images.proprety', '=', 'propreties.unique')->get();
    // dd($image);die();
    return view('welcome')->with(['states'=>$state, 'freelancer'=>$freelance,'proprety'=>$proprety,'image'=>$image]);
});
Route::resource('/client', 'App\Http\Controllers\ClientController');
Route::post('/login/client', [App\Http\Controllers\Auth\LoginController::class,'clientLogin'])->name('client.login');
Route::post('/register/client', [App\Http\Controllers\Auth\RegisterController::class,'createClient'])->name('client.register');
Route::post('/logout/client', [App\Http\Controllers\ClientController::class,'clientLogout'])->name('client.logout');
Route::get('valide/{username}',[App\Http\Controllers\ClientController::class,'validerUsername'])->name('username.valide');
Route::get('validePhone/{phone}',[App\Http\Controllers\ClientController::class,'validerPhone'])->name('phone.valide');
Route::get('/user/profile',[App\Http\Controllers\ClientController::class,'profile'])->name('client.profile');
Route::get('/user/password',[App\Http\Controllers\ClientController::class,'password'])->name('client.password');
Route::get('/user/phone',[App\Http\Controllers\ClientController::class,'phone'])->name('client.phone');
Route::put('/client/change/{id}',[App\Http\Controllers\ClientController::class,'change'])->name('client.change');
Route::post('/client/{id}/changePassword',[App\Http\Controllers\ClientController::class,'changePassword'])->name('client.changePassword');
Route::post('/validePassword',[App\Http\Controllers\ClientController::class,'validePassword'])->name('client.validePassword');

Route::resource('/agency', 'App\Http\Controllers\AgencyController');
Route::put('/agency/change/{id}',[App\Http\Controllers\AgencyController::class,'change'])->name('agency.change');
Route::get('/agency/valide/{agency}',[App\Http\Controllers\AgencyController::class,'valider'])->name('agency.valide');

Route::resource('/freelancer', 'App\Http\Controllers\FreelancerController');
Route::put('/freelancer/change/{id}',[App\Http\Controllers\FreelancerController::class,'change'])->name('freelancer.change');

Route::resource('/proprety', 'App\Http\Controllers\PropretyController');
Route::get('/client/{id}/proprety',[App\Http\Controllers\PropretyController::class,'proprety'])->name('proprity.proprity');
Route::get('/getProprety/{id}',[App\Http\Controllers\PropretyController::class,'getProprety'])->name('proprity.getProprety');

Route::resource('/type', 'App\Http\Controllers\TypeController');
Route::get('/getType',[App\Http\Controllers\TypeController::class,'getType'])->name('type.getType');

Route::resource('/image', 'App\Http\Controllers\ImageController');
Route::post('/image/{id}/store',[App\Http\Controllers\ImageController::class,'image'])->name('image.image');

Route::resource('/promotion', 'App\Http\Controllers\PromotionController');

Auth::routes();

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
