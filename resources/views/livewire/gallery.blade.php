<div>
    <link rel="stylesheet" href="{{asset('plugins/simplelightbox/dist/simple-lightbox.css')}}" />

    <style>
        body {
            font-family: 'Raleway', sans-serif;
            font-size: 20px;
            line-height: 34px;
        }

        * {
            box-sizing: border-box;
        }

        .container .gallery a img {
            float: left;
            width: 25%;
            height: auto;
            border: 2px solid #fff;
            -webkit-transition: -webkit-transform .15s ease;
            -moz-transition: -moz-transform .15s ease;
            -o-transition: -o-transform .15s ease;
            -ms-transition: -ms-transform .15s ease;
            transition: transform .15s ease;
            position: relative;
        }

        .clear {
            clear: both;
        }

        a {
            color: #009688;
            text-decoration: none;
        }

        a:hover {
            color: #01695f;
            text-decoration: none;
        }

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
    <div class="px-2 sm:px-8 pt-4">
        <div class="gallery grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($gallery as $key => $value)
                @if ($loop->index % 3 == 0) <!-- Verifica se o índice é um múltiplo de 3 -->
                    <div class="grid gap-4"> <!-- Abre um novo div a cada 3 elementos -->
                @endif
                @if ($value->photos->first())
                    <!-- Botão para abrir o modal -->
                    <div class="inner">
                        <a href="/portifolio/{{$value->id}}" class="glightbox">
                            <img class="imagem-vibrante gallery-image h-auto max-w-full rounded-lg"
                                src="{{ $value->photos->first()->getFirstMediaUrl('portifolio-images', 'thumb') }}" />
                        </a>
                    </div>
                @endif
                @if ($loop->index % 3 == 2 || $loop->last) <!-- Fecha o div a cada 3 elementos ou no último elemento -->
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <script src="{{asset('plugins/simplelightbox/dist/simple-lightbox.js')}}"></script>

    <script>
        (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const images = document.querySelectorAll('.gallery-image');

            // Adiciona classe ativa com um atraso incremental
            images.forEach(function (image, index) {
                setTimeout(function () {
                    image.classList.add('active');
                }, index * 200); // Ajuste o intervalo conforme necessário
            });
        });
    </script>


</div>
