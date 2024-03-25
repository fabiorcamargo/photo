<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PortifolioPhoto extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'id',
        'portifolio_id',
        'file',
    ];

    protected $casts = [
        'file' => 'array',
    ];

    protected static function booted(): void
    {
        // static::deleted(function (PortifolioPhoto $PortifolioPhoto) {
        //     $fotosRemovidas = $PortifolioPhoto->file;
        //     foreach ($fotosRemovidas as $fotoRemovida) {
        //         Storage::disk('public')->delete($PortifolioPhoto->file);
        //     }
        // });

        static::updated(function (PortifolioPhoto $PortifolioPhoto) {
            //dd($PortifolioPhoto);
        });

        static::updating(function (PortifolioPhoto $PortifolioPhoto) {
            //dd($PortifolioPhoto->getOriginal('file'));

            // $novasFotos = $PortifolioPhoto->getAttribute('file');
            // $fotosOriginais = $PortifolioPhoto->getOriginal('file');
            // $fotosRemovidas = array_diff($fotosOriginais, $novasFotos);

            // //dd($fotosRemovidas);

            // foreach ($fotosRemovidas as $fotoRemovida) {
            //     Storage::disk('public')->delete($fotoRemovida);
            // }
        });

        static::created(function (PortifolioPhoto $PortifolioPhoto) {
            // $imagePath = $PortifolioPhoto->file; // Caminho da imagem

            // // Verifica se o arquivo de imagem existe
            // if (file_exists("storage/app/public$imagePath[0]")) {
            //     // Redimensiona a imagem para a largura e altura desejadas
            //     $resizedImage = Image::make("storage/app/public$imagePath[0]")->resize(300, 200)->encode('jpg');

            //     // Salva a imagem redimensionada
            //     Storage::put('storage/app/public', $resizedImage);
            // } else {
            //     // Log de erro ou tratamento de exceção, caso o arquivo não exista
            //     //dd("storage/app/public$imagePath[0]");
            //     Log::error("Arquivo de imagem não encontrado em: $imagePath");
            // }
        });
    }

    public function portifolio()
    {
        return $this->belongsTo(Portifolio::class);
    }
}
