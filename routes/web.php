<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestController;
use App\Http\Controllers\ComenRestController;
use App\Http\Controllers\CochabambaController;

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

Route::get('/', function () {
    return view('home');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

/* Route::middleware(['admin'])->group(function () {
    Route::get('/cochabamba', [\App\Http\Controllers\CochabambaController::class, 'index']);

});  */
/* Route::get('/cochabamba', [\App\Http\Controllers\CochabambaController::class, 'index'])->name('cochabamba.index');
Route::get('/cochabamba/create', [\App\Http\Controllers\CochabambaController::class, 'create'])->name('cochabamba.create');
Route::post('/cochabamba', [\App\Http\Controllers\CochabambaController::class, 'store'])->name('cochabamba.store');
 */

Route::resource("cochabamba", CochabambaController::class);
Route::get('comen/{cochabamba}', [CochabambaController::class, 'comentario'])->name('cochabamba.comentario');
Route::resource('comentario', ComenRestController::class);
Route::resource('restaurant', RestController::class);

// Route::get('/restaurant', [\App\Http\Controllers\RestController::class, 'index'])->name('restaurant.index');
// Route::get('/restaurant/create', [\App\Http\Controllers\RestController::class, 'create'])->name('restaurant.create');
//     Route::post('/restaurant', [\App\Http\Controllers\RestController::class, 'store'])->name('restaurant.store');
//     Route::get('/restaurant/{restaurant}/edit', [\App\Http\Controllers\RestController::class, 'edit'])->name('restaurant.edit');
//     Route::patch('/restaurant/{restaurant}', [\App\Http\Controllers\RestController::class, 'update'])->name('restaurant.update');
//     Route::delete('/restaurant/{restaurant}', [\App\Http\Controllers\RestController::class, 'destroy'])->name('restaurant.destroy');

// Route::middleware(['admin'])->group(function () {


// });
/* Route::resource("restaurant",RestController::class);
 */
