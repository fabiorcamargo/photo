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
    <div>
        <div class="px-4 py-8">
            <ul
                class="gallery box-container columns-2 md:columns-3 relative">
                @foreach ($photos->getMedia('portifolio-images') as $value)
                <li class="box">
                    <!-- Botão para abrir o modal -->
                    <div class="inner">
                        <a href="{{$value->getUrl()}}" class="">
                            <img class="imagem-vibrante" src="{{$value->getUrl('thumb')}}" />
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>



</div>
