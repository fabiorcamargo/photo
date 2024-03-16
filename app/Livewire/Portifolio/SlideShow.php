<?php

namespace App\Livewire\Portifolio;

use App\Models\Config;
use App\Models\PortifolioPhoto;
use Livewire\Component;

class SlideShow extends Component
{
    public $portifolio;
    public $photos;
    public function mount(){
        ($this->photos = $this->portifolio);
    }

    public function wplink() {
        $config = Config::first();
        return redirect()->away('https://wa.me//'.$config->body['wp'].'?text=Tenho%20interesse%20em%20comprar%20seu%20carro');
    }

    public function instalink() {
        $config = Config::first();
        return redirect()->away('https://www.instagram.com/'.$config->body['insta']);
    }

    public function render()
    {
        return view('livewire.portifolio.slide-show');
    }
}
