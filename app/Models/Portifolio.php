<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portifolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'tags',
        'category',
        'bg',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function photos()
    {
        return $this->hasMany(PortifolioPhoto::class);
    }

    public function FirstPhoto()
    {
        $first = $this->hasMany(PortifolioPhoto::class);

        $url = $first->first()->getFirstMediaUrl('portifolio-images');

        return redirect()->to($url);
    }

}
