<div>
    <div>
        <div class="px-4">
            <ul
                class="box-container columns-2 md:columns-3 relative">
                @foreach ($photos->getMedia('portifolio-images') as $value)

                <li class="box">
                    <!-- Botão para abrir o modal -->
                    <div class="inner">
                        <a href="{{$value->getUrl()}}" class="glightbox">
                            <img class="imagem-vibrante" src="{{$value->getUrl('thumb')}}" />
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


</div>
