<?php
use App\Http\Controllers;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\catagories\CategoriesController;
use App\Http\Controllers\plans\PlansController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GigsController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Tags Routes
Route::resource('tags',TagsController::class);

//Categories routes
Route::resource('categories',CategoriesController::class);

//subscription routes
Route::group(['prefix'=>'subscriptions'],  function ()
{
    Route::get('/',[PlansController::class,'index'])->name('subscriptions.index');
    Route::post('/store',[PlansController::class,'store'])->name('subscriptions.store');
});



//Gigs Routes
Route::prefix('gigs')->group(function () {
    //dis[lay gigs in admin]
    Route::get('/',[GigsController::class,'index'])->name('gigs.index'); 
      //store gig
    Route::post('/store',[GigsController::class,'store'])->name('gigs.store');
    //create gig page
    Route::get('/create',[GigsController::class,'create'])->name('gigs.create');
 
    //update gig page
    Route::get('/{id}edit',[GigsController::class,'edit'])->name('gigs.edit');
    //update gig
    Route::patch('/{id}',[GigsController::class,'update'])->name('gigs.update');
    //delete gig
    Route::delete('/{id}',[GigsController::class,'destroy'])->name('gigs.destroy');
});

