<?php

namespace App\Livewire;

use App\Models\Testimonial as ModelsTestimonial;
use Livewire\Component;

class Testimonial extends Component 
{
    public $testimonials;
    public function mount(){
        $this->testimonials = ModelsTestimonial::all();
    }
    public function render()
    {
        return view('livewire.testimonial');
    }
}
