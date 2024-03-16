<?php

use App\Livewire\Portifolio\PortifolioShow;
use App\Models\PortifolioPhoto;
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

Route::view('/', 'welcome2');

Route::view('/portifolio/{portifolio}', 'PortifolioShow');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('image/{id}', function($id){
    $photo = PortifolioPhoto::find($id);
    $url = $photo->getFirstMediaUrl('portifolio-images');
    return response()->redirectTo($url);
})->name('image.show');

Route::get('image/{id}/thumb', function($id){
    $photo = PortifolioPhoto::find($id);
    $url = $photo->getFirstMediaUrl('portifolio-images', 'thumb');
    return response()->redirectTo($url);
})->name('image-thumb.show');

require __DIR__.'/auth.php';
