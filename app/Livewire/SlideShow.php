<?php

namespace App\Livewire;

use App\Models\Config;
use App\Models\Portifolio;
use App\Models\PortifolioPhoto;
use Livewire\Component;

class SlideShow extends Component
{
    public $portifolios;
    public $config;
    public function mount(){
        $this->portifolios = Portifolio::latest()->take(10)->get();
        $this->config = Config::first();
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

        return view('livewire.slide-show');
    }
}
