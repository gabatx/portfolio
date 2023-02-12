<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RepoController;
use App\Models\Tag;
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

Route::resource('/', HomeController::class);
Route::resource('/projects', ProjectsController::class);
Route::resource('/project', ProjectController::class);
Route::resource('/repositories', RepoController::class);
Route::resource('/about-me', AboutMeController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/feedback', FeedbackController::class);
Route::resource('/login', LoginController::class);
Route::resource('/list-projects', AdminProjectController::class);
Route::resource('/new-project', AdminProjectController::class);
Route::resource('/edit-project', AdminProjectController::class);
Route::resource('/create-project', AdminProjectController::class);
Route::resource('/delete-project', AdminProjectController::class);
Route::resource('/delete-image', ImageController::class);
Route::resource('/tag', AdminTagController::class); // --- Si

Auth::routes(
 ['register' => false, 'reset' => false, 'verify' => false] // Para que no se pueda registrar ni resetear la contraseña ni verificar el email
);

Route::get('/home', [App\Http\Controllers\LoginController::class, 'index']);

// Para proteger las rutas. Se va a utilizar siempre que este logueado.
// Lo que hemos hecho es decirle que cuando se acceda a la ruta /index de AdminProjectController, se va a ejecutar el middleware auth.
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\AdminProjectController::class, 'index'])->name('home');
});

// LA RUTA A DONDE IRÁN CUANDO NO ESTÉN LOGUEADOS.
Route::middleware(['guest'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


