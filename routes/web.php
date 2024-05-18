<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\formeLibreController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ModeleExistantController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\PersonnalisationController;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('google')->redirect();
// });

// Route::get('/oauth2/callback', function () {
//     $user = Socialite::driver('google')->user();
//     // Utiliser les informations utilisateur comme $user->token
// });


Route::get('/auth/redirect', [AuthController::class, 'redirectToGoogle']);
Route::get('/oauth2/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/send-email', [AuthController::class, 'sendEmail'])->name('sendEmail');




Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/creer', function () {
    return view('creer');
});


Route::resource("/checkout", CheckoutController::class);
Route::resource("/order-confirmation", OrderController::class);
Route::resource("/nos-produits", ProduitController::class);
Route::resource("/forme", formeLibreController::class);
Route::resource("/modele-existant", ModeleExistantController::class);
Route::resource("/description", DescriptionController::class);
Route::resource("/personnalisation", PersonnalisationController::class);


require __DIR__.'/auth.php';
