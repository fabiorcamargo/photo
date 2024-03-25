<?php

use App\Livewire\Portifolio\PortifolioShow;
use App\Models\Config;
use App\Models\PortifolioPhoto;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\ResponsiveImages\Jobs\GenerateResponsiveImagesJob;
use Spatie\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator;

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

Route::get('image/{id}', function ($id) {
    $photo = PortifolioPhoto::find($id);
    $url = $photo->getFirstMediaUrl('portifolio-images');
    return response()->redirectTo($url);
})->name('image.show');

Route::get('image/{id}/thumb', function ($id) {
    $photo = PortifolioPhoto::find($id);
    $url = $photo->getFirstMediaUrl('portifolio-images', 'thumb');
    return response()->redirectTo($url);
})->name('image-thumb.show');

Route::get('test', function () {


 // Obtém todas as mídias do seu modelo (substitua 'App\Models\SeuModelo' pelo nome do seu modelo)
 $mediaItems = \App\Models\PortifolioPhoto::get()->flatMap(function ($model) {
    return $model->getMedia('portifolio-images');
});

//dd($mediaItems);
// Itera sobre todas as mídias
foreach (\App\Models\PortifolioPhoto::get() as $mediaItem) {
    // Verifica se a mídia já possui versões responsivas


    $mediaItems = $mediaItem->getMedia("*");

    foreach($mediaItems as $media){
        $mediaItem->addMedia($media->getPath())
        ->withResponsiveImages()
        // or if you want to add it based on a condition then use
        ->toMediaCollection('portifolio-images', 'media');

    }

   
}

return 'Imagens responsivas geradas com sucesso!';

    // $photos = PortifolioPhoto::all();

    // //dd($photo[0]->getMedia('portifolio-images'));

    // foreach ($photos as $photo) {
    //     $photo->getMedia('portifolio-images')->generateResponsiveImages();

    // }
    //     $yourModel
    //    ->addMedia($yourImageFile)
    //    ->withResponsiveImages()
    //    // or if you want to add it based on a condition then use
    //    ->withResponsiveImagesIf($condition) // accepts "closure or boolean"
    //    ->toMediaCollection();
});

Route::get('whatsapp', function () {
    $config = Config::first();
    //dd($config);
    $wp = 'https://wa.me//'.$config->body['wp'].'?text='. $config->body['wp_msg'];
    return view('whatsapp', ['wp' => $wp]);
});