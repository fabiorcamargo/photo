<div>

    <style>
        /* CSS para controlar a transição de opacidade */
        .gallery-image {
            opacity: 0;
            /* Começa com opacidade 0 */
            transition: opacity 0.5s ease;
            /* Transição suave de opacidade */
        }

        .gallery-image.active {
            opacity: 1;
            /* Altera a opacidade para 1 quando a classe ativa é adicionada */
        }
    </style>
    <div>
        <div class="px-4 pt-4">
            <ul
                class="gallery box-container columns-2 md:columns-3 relative" id="my-gallery">
                @foreach ($photos->getMedia('portifolio-images') as $value)
                <li class="box py-2">
                    <!-- Botão para abrir o modal -->
                    <div class="inner">
                        <a href="{{$value->getUrl()}}"
                            data-pswp-width="{{Image::make($value->getPath())->width()}}"
                            data-pswp-height="{{Image::make($value->getPath())->height()}}"
                            data-cropped="false" target="_blank">
                            {{$value}}
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


    {{-- <li class="box py-2">
        <!-- Botão para abrir o modal -->
        <div class="inner">
            <a href="{{$value->getUrl()}}"
                data-pswp-width="{{Image::make($value->getPath())->width()}}"
                data-pswp-height="{{Image::make($value->getPath())->height()}}"
                data-cropped="false" target="_blank">
                {{$value}}
            </a>
        </div>
    </li> --}}


</div>
