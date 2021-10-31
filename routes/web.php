
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ShortlinkController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PostController;

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

// PagesController
// Route::get('/', function () {
//   return view('errors.maintenance');
// });

Route::get('/', [PagesController::class, 'landing']);
Route::get('/member', [PagesController::class, 'member']);
Route::get('/about', [PagesController::class, 'aboutus']);
Route::get('/ourmembers', [PagesController::class, 'ourmembers']);

// Competitions Routing
Route::prefix('competitions')->group(function () {
  Route::get('/fracture-fluid-design', [PagesController::class, 'fracture_fluid_design']);
  Route::get('/paper', [PagesController::class, 'paper']);
  Route::get('/smart', [PagesController::class, 'smart']);
  Route::get('/case-study', [PagesController::class, 'case_study']);
  Route::get('/business-case', [PagesController::class, 'business_case']);
  Route::get('/oil-rig-design', [PagesController::class, 'oil_rig_design']);
  Route::get('/stock-trading', [PagesController::class, 'stock_trading']);
});
// End of Competitions Routing
Route::get('/profile', [PagesController::class, 'edit'])->middleware(['auth', 'checkRole:Member']);
Route::put('/profile', [PagesController::class, 'store'])->middleware(['auth', 'checkRole:Member']);
Route::put('/changepass', [PagesController::class, 'changepass'])->middleware(['auth', 'checkRole:Member']);
Route::put('/memberidupdate/{profile:student_number}', [PagesController::class, 'memberidupdate'])->middleware(['auth', 'checkRole:Member']);
Route::get('/membercard/{profile:student_number}', [PagesController::class, 'membercard'])->middleware(['auth', 'checkRole:Member']);

// RegisterController
Route::get('/member/new', [RegisterController::class, 'new_member'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'member_store']);

Route::get('/member/renewal', [RegisterController::class, 'renewal_member'])->middleware('guest');
Route::get('/renewal', [RegisterController::class, 'renewal'])->middleware('guest');
Route::post('renewal', [RegisterController::class, 'renewal_store']);

// AuthController
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/IWantToBeAdmin', [AdminController::class, 'admin_request']);
Route::post('/requestadmin', [AdminController::class, 'admin_store']);

// Admin Routes
Route::prefix('dashboard')->middleware(['auth', 'checkRole:Dev'])->group(function () {
  Route::get('/admin', [AdminController::class, 'index']);
  Route::get('/admin/create', [AdminController::class, 'create']);
  Route::post('/admin', [AdminController::class, 'store']);
  Route::delete('/admin/{user:id}', [AdminController::class, 'destroy']);
  Route::get('/admin/request', [AdminController::class, 'request']);
  Route::patch('/admin/acceptrequest/{user:id}', [AdminController::class, 'acceptrequest']);
});
Route::prefix('dashboard')->middleware(['auth', 'checkRole:Dev,Admin'])->group(function () {
  Route::get('/admin/{user:id}/edit', [AdminController::class, 'edit']);
  Route::patch('/admin/{user:id}', [AdminController::class, 'update']);
  Route::patch('/admin/changepass/{user:id}', [AdminController::class, 'changepass']);
  Route::get('/', [DashboardController::class, 'index']);

  Route::resource('shortlink', ShortlinkController::class);

  Route::resource('user', UserController::class);
  Route::get('/renewal', [DashboardController::class, 'renewal']);
  Route::get('/point', [DashboardController::class, 'point']);
  Route::get('/member', [DashboardController::class, 'member']);
  Route::put('/resetpass/{user:id}', [UserController::class, 'resetpass']);

  Route::put('/updatePoint/{point:id}', [DashboardController::class, 'updatePoint']);

  Route::resource('article', ArticleController::class);
  Route::get('/articles', [ArticleController::class, 'all']);
  Route::get('/article/publish/{article:slug}', [ArticleController::class, 'publish']);

  Route::resource('post', PostController::class);
});

//Article
Route::get('/petroknowledge', [PagesController::class, 'petroknowledge']);
Route::get('/petronews', [PagesController::class, 'petronews']);
Route::get('/paper-review', [PagesController::class, 'paper_review']);
Route::get('/article/{article:slug}', [PagesController::class, 'article'])->middleware('auth');

//Posts
Route::get('/fun-facts', [PagesController::class, 'funfacts']);
Route::get('/seize-your-sunday', [PagesController::class, 'seizeyoursunday']);

Route::get('/{shortlink:short}', [ShortlinkController::class, 'show']);
