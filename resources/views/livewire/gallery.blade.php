
    <div class="px-4">
        <ul
            class="box-container grid gap-3 columns-2 md:columns-3 relative">
            @foreach ($gallery as $key => $value)

            <li class="box">
                <!-- Botão para abrir o modal -->
                <div class="inner">
                    <a href="/portifolio/{{$value->id}}" class="glightbox">
                        <img class="imagem-vibrante" src="{{ $value->photos->first()->getFirstMediaUrl('portifolio-images', 'thumb') }}" />
                    </a>
                </div>
            </li>
            
            @endforeach
        </ul>
    </div>
