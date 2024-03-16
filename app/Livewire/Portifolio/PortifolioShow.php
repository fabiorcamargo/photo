<?php

namespace App\Livewire\Portifolio;

use App\Models\Portifolio;
use Livewire\Component;

class PortifolioShow extends Component
{
    public $portifolio;

    public function mount($portifolio)
    {
        $this->portifolio = Portifolio::find($portifolio);
        
    }
    public function render()
    {
        return view('livewire.portifolio.portifolio-show');
    }
}
