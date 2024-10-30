<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('web/layouts/weblayout');
//     // return redirect('/admin/login');
// });

Route::get('/', [WebsiteController::class, 'index'])->name('homeindex');
Route::get('/about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('/teams', [WebsiteController::class, 'teams'])->name('teams');
Route::get('/team-details/{team_slug}', [WebsiteController::class, 'teamDetail'])->name('teamDetail');
Route::get('/player-details/{slug}', [WebsiteController::class, 'playerDetail'])->name('playerDetail');
Route::get('/upcoming-game-lineup', [WebsiteController::class, 'fixture'])->name('fixture');
Route::get('/match-result', [WebsiteController::class, 'matchResult'])->name('matchResult');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {

        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('create', [UserController::class, 'create'])->name('create');
        Route::post('check', [UserController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:web', 'PreventBackHistory', 'is_first_login'])->group(function () {
        Route::view('/home', 'dashboard.user.home')->name('home');
    });

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
        Route::view('/change-password', 'dashboard.user.changepass')->name('changepass');
        Route::post('/change-passowrd-action', [UserController::class, 'changePassword'])->name('changepassaction');
        Route::post('logout', [UserController::class, 'logout'])->name('logout');
    });
});



Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.admin.login1')->name('login');
        Route::post('check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/change-password', 'dashboard.admin.changepass')->name('changepass');
        Route::post('/change-passowrd-action', [AdminController::class, 'changePassword'])->name('changepassaction');
        Route::post('logout', [AdminController::class, 'logout'])->name('logout');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory', 'is_admin_first_login'])->group(function () {
        Route::get('home', [AdminController::class, 'index'])->name('home');
        Route::get('basicInfo', [AdminController::class, 'basicInfo'])->name('basicInfo');
        Route::post('infoupdate', [AdminController::class, 'update'])->name('infoupdate');

        Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
        Route::get('teams/create', [TeamController::class, 'create'])->name('teamCreate');
        Route::post('teams', [TeamController::class, 'store'])->name('teams.store');
        Route::get('teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
        Route::put('teams/{id}', [TeamController::class, 'update'])->name('teams.update');
        Route::delete('teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');

        Route::get('teams/{team}/players', [PlayerController::class, 'index'])->name('viewPlayers');
        Route::get('teams/{team}/players/create', [PlayerController::class, 'create'])->name('addPlayer');
        Route::post('teams/{team}/players', [PlayerController::class, 'store'])->name('storePlayer');
        Route::get('teams/{teamId}/players/{player}/edit', [PlayerController::class, 'edit'])->name('editPlayer');
        Route::put('players/{teamId}/{player}', [PlayerController::class, 'update'])->name('updatePlayer');
        Route::delete('/admin/players/{teamId}/{playerId}', [PlayerController::class, 'destroy'])->name('deletePlayer');


        Route::get('games', [TeamController::class, 'gamesIndex'])->name('games.index');
        Route::get('games/create', [TeamController::class, 'gamesCreate'])->name('games.create');
        Route::post('games', [TeamController::class, 'gamesStore'])->name('games.store');
        Route::get('games/{id}/edit', [TeamController::class, 'gamesEdit'])->name('games.edit');
        Route::put('games/{id}', [TeamController::class, 'gamesUpdate'])->name('games.update');
        Route::delete('games/{id}', [TeamController::class, 'gamesDestroy'])->name('games.destroy');

        Route::get('/gallery', [AdminController::class, 'galleryIndex'])->name('galleryIndex');
        Route::get('/gallery/create', [AdminController::class, 'create'])->name('gallery.create');
        Route::post('/gallery', [AdminController::class, 'store'])->name('gallery.store');
        Route::delete('/gallery/{id}', [AdminController::class, 'destroy'])->name('gallery.destroy');

        Route::get('/faq-list', [AdminController::class, 'faqList'])->name('faqs.faq-list'); // List all FAQs
    Route::get('/faq-create', [AdminController::class, 'faqCreate'])->name('faqs.faq-create'); // Show create form
    Route::post('/faq-store', [AdminController::class, 'faqStore'])->name('faqs.faq-store'); // Store new FAQ
    Route::get('/{faq}/faq-show', [AdminController::class, 'faqShow'])->name('faqs.faq-show'); // Show single FAQ
    Route::get('/{faq}/faq-edit', [AdminController::class, 'faqEdit'])->name('faqs.faq-edit'); // Show edit form
    Route::put('/{faq}/faq-update', [AdminController::class, 'faqUpdate'])->name('faqs.faq-update'); // Update FAQ
    Route::delete('/{faq}/faq-delete', [AdminController::class, 'faqDelete'])->name('faqs.faq-delete'); // Delete FAQ
    });
});
